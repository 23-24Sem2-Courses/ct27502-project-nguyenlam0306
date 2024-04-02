<?php

namespace App\Controllers;

class Login extends \App\Core\Controller
{
    private function checkAuthor()
    {
        if (isset($_SESSION['islogin'])) {
            \App\Core\Router::redirect('/Home');
            exit;
        }
    }
    // kiểm tra đăng nhập chưa
    function Show()
    {
        $this->checkAuthor();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view('template', [
                'page' => 'Login'
            ]);
            // chỗ này -> yeu cầu đn thì đưa data Login
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validator = new \App\Core\Validator([
                'username' => 'isRequired',
                'password' => 'isRequired'
            ]);
            // nhận kiemr tra 2 biến 
            $errors = $validator->getErrors();
            // trả lỗi ra 
            if (!empty($errors)) {
                $this->view('template', [
                    'page' => 'Login',
                    'errors' => $errors
                ]);
            }  // đưa tới trang đăng nhập + lỗi 
            else {
                $user = $this->model('User');
                $value = $validator->getValidatedValue();
                if ($user->authenticate($value['username'], $value['password'])) {
                    $_SESSION['islogin'] = 1;
                    $_SESSION['user_id'] = $user->getID();
                    $_SESSION['user_fullname'] = $user->getFullName();
                    if ($value['username'] === 'admin') {
                        echo '<script>alert("Đã vào admin thành công");setTimeout(function(){window.location.href="/Admin/";}, 980);</script>';
                    } else {
                        echo '<script>alert("Đăng nhập thành công");setTimeout(function(){window.location.href="/Home";}, 980);</script>';
                    }
                } else {
                    $this->view('template', [
                        'page' => 'Login',
                        'authenticate' => false
                    ]);
                }
            }
        }
    }
}
