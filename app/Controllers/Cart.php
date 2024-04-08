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
         $cart= json_decode($_POST['cart'], true);
      }
   }
}
