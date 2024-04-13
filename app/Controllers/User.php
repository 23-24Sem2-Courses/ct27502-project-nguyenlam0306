<?php

namespace App\Controllers;

use App\Core\Validator;

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
        $this->view('template', [
            'page' => 'UserInfor',
            'username' => $user->getUserName(),
            'fullname' => $user->getFullName(),
            'phone' => $user->getPhone(),
        ]);
    }
    public function Order()
    {
        $orders = $this->model('Order');
        $orders= $orders->getbyCustomerID($_SESSION['user_id']);
        foreach($orders as $order) {
            $items = $this->model('Order_Items')->getbyOrderId($order->getOrderInfor()['order_id']);
            $order->setItems($items);
        }
        $this->view('template', [
            'page' => 'Order',
            'orders' => $orders
        ]);
    }
    public function Change()
    {
        $this->checkAuthor();
        $user = $this->model('User');
        $user->findById($_SESSION['user_id']);
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view('template', [
                'page' => 'Change',
                'username' => $user->getUserName(),
                'fullname' => $user->getFullName(),
                'phone' => $user->getPhone(),
            ]);
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validator = new Validator([
                'fullname' => 'isRequired',
                'phone' => 'isRequired | isPhone | unique:User,phone'
            ]);
            $validator->validate();
            $errors = $validator->getErrors();
            $value = $validator->getValidatedValue();
            if ($user->getPhone() === $value['phone']) {
                unset($errors['phone']);
            }
            if (!empty($errors)) {
                $this->view('template', [
                    'page' => 'Change',
                    'errors' => $errors,
                    'username' => $user->getUserName(),
                    'fullname' => $user->getFullName(),
                    'phone' => $user->getPhone(),
                ]);
            } else {
                $user->updateFullName($value['fullname']);
                $user->updatePhone($value['phone']);
                $_SESSION['user_fullname'] = $value['fullname'];
                echo '<script>alert("Đã cập nhật");setTimeout(function(){window.location.href="/User/Infor";}, 1000);</script>';
            }
        }
    }
    public function ChangePassword()
    {
        $this->checkAuthor();
        $user = $this->model('User');
        $user->findById($_SESSION['user_id']);
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view(
                'template',
                ['page' => 'ChangePassword']
            );
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validator = new Validator([
                'presentPassword' => 'isRequired',
                'newPassword' => 'isRequired | minLength:8',
                'newPassword_confirm' => 'isRequired | isSame: newPassword',
            ]);
            $validator->validate();
            $errors = $validator->getErrors();
            $value = $validator->getValidatedValue();
            if (!$user->authenticate($user->getUserName(), $value['presentPassword'])) {
                $errors['presentPassword'] = 'Mật khẩu hiện tại không chính xác!';
            }
            if (!empty($errors)) {
                $this->view('template', [
                    'page' => 'ChangePassword',
                    'errors' => $errors
                ]);
            } else {
                $user->updatePasswordHash(password_hash($value['newPassword'], PASSWORD_DEFAULT));
                echo '<script>alert("Đổi mật khẩu thành công, Vui lòng đăng nhập lại");setTimeout(function(){window.location.href="/Logout";}, 1020);</script>';
            }
        }
    }

}
