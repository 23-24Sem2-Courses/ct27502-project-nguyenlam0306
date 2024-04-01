<?php

namespace App\Controllers;

class Register extends \App\Core\Controller
{
   function Show()
   {
      $this->view('template', ['page' => 'Register']);
   }
}