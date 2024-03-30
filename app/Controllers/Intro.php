<?php

namespace App\Controllers;

class Intro extends \App\Core\Controller
{
   function Show()
   {
      $this->view('template', ['page' => 'Intro']);
   }
}