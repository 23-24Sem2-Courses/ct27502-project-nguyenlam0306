<?php

namespace App\Controllers;

class Home extends \App\Core\Controller
{
   function Show()
   {
      $this->view('template', ['page' => 'Home']);
   }
}