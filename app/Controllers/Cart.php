<?php

namespace App\Controllers;

class Cart extends \App\Core\Controller
{
   function Show()
   {
      $this->view('template', ['page' => 'Cart']);
   }
}