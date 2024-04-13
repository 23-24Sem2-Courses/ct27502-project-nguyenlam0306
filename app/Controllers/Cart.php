<?php

namespace App\Controllers;

class Cart extends \App\Core\Controller
{
   function Show()
   {
      $this->view('template', ['page' => 'Cart']);
   }
   function Order()
   {
      if (!isset($_SESSION['islogin'])) {
         echo '<script>alert("Bạn phải đăng nhập mới có thể đặt hàng"); setTimeout(function(){window.location.href="/Cart";},989)</script>';
         exit();
      }
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $cart = json_decode($_POST['cart'], true);
         $order = $this->model('Order');
         $order->fill([
            'customer_id' => $_SESSION['user_id'],
            'address' => $_POST['address']            
         ]);
         $order->save();
         foreach($cart as $item) {
           $order_items = $this->model('Order_Items');
         //   var_dump($item);
           $order_items->fill([
            'order_id' => $order->getOrderInfor()['order_id'],
            'product_id' => $item['id'],
            'quantity' => $item['quantity']
           ]);
           $order_items->save();
      }
    
      echo '<script>localStorage.removeItem("isCart");</script>';
      echo '<script>alert("Đặt hàng thành công, vui lòng kiểm tra lại trong đơn nhé!");setTimeout(function(){window.location.href="/User/Order";}, 900);</script>';
   }
}
}