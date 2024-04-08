<?php

namespace App\Controllers;

class Feedback extends \App\Core\Controller
{
   function Show()
   {
      $this->view('template', ['page' => 'Feedback']);
   }
}