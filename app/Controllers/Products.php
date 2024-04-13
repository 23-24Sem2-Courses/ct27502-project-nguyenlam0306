<?php

namespace App\Controllers;

use App\Core\Controller;

class Products extends Controller
{
   public function Show()
   {
       $model = $this->model('Products');
       $products = [];
       foreach ($model->getAllProducts() as $product) {
           $product = $product->getProductInfor();
               $products[] = $product;           
       }
       $this->view('template', [
           'page' => 'Products',
           'products' => $products
       ]);
   }
   public function Aodai()
   {
       $model = $this->model('Products');
       $products = [];
       foreach ($model->getAllProducts() as $product) {
           $product = $product->getProductInfor();
           if ($product['type'] === 'Áo dài') {
            $products[] = $product;
        }           
       }
       $this->view('template', [
           'page' => 'Products',
           'products' => $products
       ]);
   }
   public function Cosplay()
   {
       $model = $this->model('Products');
       $products = [];
       foreach ($model->getAllProducts() as $product) {
           $product = $product->getProductInfor();
           if ($product['type'] === 'Cosplay') {
            $products[] = $product;
        }           
       }
       $this->view('template', [
           'page' => 'Products',
           'products' => $products
       ]);
   }
   public function Dress()
   {
       $model = $this->model('Products');
       $products = [];
       foreach ($model->getAllProducts() as $product) {
           $product = $product->getProductInfor();
           if ($product['type'] === 'Dress') {
            $products[] = $product;
        }           
       }
       $this->view('template', [
           'page' => 'Products',
           'products' => $products
       ]);
   }
   public function Trousers()
   {
       $model = $this->model('Products');
       $products = [];
       foreach ($model->getAllProducts() as $product) {
           $product = $product->getProductInfor();
           if ($product['type'] === 'Trousers') {
            $products[] = $product;
        }           
       }
       $this->view('template', [
           'page' => 'Products',
           'products' => $products
       ]);
   }
   public function Vest()
   {
       $model = $this->model('Products');
       $products = [];
       foreach ($model->getAllProducts() as $product) {
           $product = $product->getProductInfor();
           if ($product['type'] === 'Vest') {
            $products[] = $product;
        }           
       }
       $this->view('template', [
           'page' => 'Products',
           'products' => $products
       ]);
   }
}


