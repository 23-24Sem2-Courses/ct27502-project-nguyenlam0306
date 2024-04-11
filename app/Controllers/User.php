<?php

namespace App\Controllers;

use App\Core\Validators;

class User extends \App\Core\Controller
{
    private function checkAuthor()
    {
        if (!isset($_SESSION['islogin'])) {
            echo '<script>alert("Bạn phải đăng kí để sử dụng chức năng này");setTimeout(function(){window.location.href="/Home";}, 1000);</script>';
            exit;
        }
    }
    public function Infor()
    {
        $this->checkAuthor();
        $user = $this->model('User');
        $user->findById($_SESSION['user_id']);
        $this->view('user', [
            'page' => 'Infor',
            'username' => $user->getUserName(),
            'fullname' => $user->getFullName(),
            'phone' => $user->getPhone(),
        ]);
    }
    public function Order() {
        
    }
}
