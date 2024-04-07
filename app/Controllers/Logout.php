<?php

namespace App\Controllers;

class Logout extends \App\Core\Controller
{
   function Show()
   {
      if (isset($_SESSION['islogin'])) {
         unset($_SESSION['user_id']);
         unset($_SESSION['user_fulname']);
         unset($_SESSION['islogin']);
       if (isset($_SESSION['isadmin']))   unset($_SESSION['isadmin']);
         \App\Core\Router::redirect('/Home');
     }
   }
}