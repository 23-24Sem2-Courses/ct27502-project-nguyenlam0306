<?php
session_start();
define('BASE_URL','/');
require '../vendor/autoload.php';
require  "../app/bootstrap.php";
$myApp = new App\Core\App();
