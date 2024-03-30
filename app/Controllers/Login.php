<?php

namespace App\Controllers;

class Login extends \App\Core\Controller
{
   function Show()
   {
      $this->view('template', ['page' => 'Login']);
   }
}