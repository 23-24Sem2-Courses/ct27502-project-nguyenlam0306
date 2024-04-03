<?php

namespace App\Controllers;

class Products extends \App\Core\Controller
{
   function Show()
   {
      $model = $this->model('Products');
      $products = [];
      foreach ($model->getAllProducts() as $product) {
         $product = $product->getProductInfor();
         $products[] = $product;
      }
      $this->view('template', ['page' => 'Products', 'products' => $products]);
   }
}
