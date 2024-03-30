<?php

namespace App\Controllers;

class Products extends \App\Core\Controller
{
   function Show()
   {
      $this->view('template', ['page' => 'Products']);
   }
}