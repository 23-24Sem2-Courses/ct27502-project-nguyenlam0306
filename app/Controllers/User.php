<?php
namespace App\Controllers;
use App\Core\Validators;
class User extends \App\Core\Controller{
    private function checkAuthor()
    {
        if (!isset($_SESSION['islogin'])) {
            echo '<script>alert("Bạn phải đăng kí để sử dụng chức năng này");setTimeout(function(){window.location.href="/Home";}, 1000);</script>';
            exit;
        }
    }

    
}
?>