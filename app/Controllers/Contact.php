<?php

namespace App\Controllers;

class Contact extends \App\Core\Controller
{
   function Show()
   {
      $this->view('template', ['page' => 'Contact']);
   }
}