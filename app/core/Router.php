<?php

namespace App\Core;

class Router
{
    private $controller = 'Home';
    private $action = 'Show';
    private $params;
    // Xu ly cac bien 
    public function __construct()
    {
        $arr = $this->UrlProcess();
        // Bien controller 
        if (isset($arr[0])) {
            if (class_exists('App\\Controllers\\' . $arr[0])) {
                $this->controller = $arr[0];
            }
            unset($arr[0]);
        }
        // Tao doi tuong moi -> man hinh moi 
        $this->controller = new ('App\\Controllers\\' . $this->controller);
        // Actions
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        $this->params = $arr ? array_values($arr) : [];
    }
    public function UrlProcess()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim($_GET['url'], "/")));
        }
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getParams()
    {
        return $this->params;
    }
   

    public static function redirect($url)
    {
        header('Location: ' . $url);
    }
}
