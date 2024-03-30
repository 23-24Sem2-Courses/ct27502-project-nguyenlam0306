<?php
namespace App\Core;

class Controller
{
    // chứa hàm model để trả về 
     function model($model)
    {
        return new ("\\App\Models\\" . $model);
    }
     function view($view, $data)
    {
        require_once '../app/views/' . $view . '.php';
    }
}
?>