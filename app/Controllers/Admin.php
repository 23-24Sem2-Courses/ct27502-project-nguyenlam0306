<?php
namespace App\Controllers;
use App\Models\Order;
use App\Models\Products;

class Admin extends \App\Core\Controller{

private $user;
private $product;

private $order;

function Show() {
    $this->view('dashboard',[]);
}

function Manage($page){
    $this->view('dashboard',['page'=> $page]);
}



}

?>