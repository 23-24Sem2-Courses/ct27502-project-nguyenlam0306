<?php

namespace App\Controllers;

use App\Models\Order;
use App\Models\Products;

class Admin extends \App\Core\Controller
{

    private $user;
    private $product;

    private $order;

    function Show()
    {
        $this->view('dashboard', ['page' => 'Home']);
    }

    function Manage($page)
    {
        $this->view('dashboard', ['page' => $page]);
    }

    function fillFromForm()
    {
        if (isset($_POST['name']) && isset($_POST['type']) && isset($_POST['description']) && isset($_POST['size']) && isset($_POST['color']) && isset($_POST['price']) && isset($_FILES['image'])) {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $description = $_POST['description'];
            $size = $_POST['size'];
            $color = $_POST['color'];
            $price = $_POST['price'];
            $dir_Image = '../public/img/uploads/';
            $filename_with_ext = $_FILES["image"]["name"];
            $filename_without_ext = pathinfo($filename_with_ext, PATHINFO_FILENAME);
            $file_extension = pathinfo($filename_with_ext, PATHINFO_EXTENSION);
            $new_filename = $filename_without_ext . '_' . date("Y-m-d_H-i-s") . '.' . $file_extension;
            move_uploaded_file($_FILES["image"]["tmp_name"], $dir_Image . $new_filename);
            $image_path = '/img/uploads/' . $new_filename;
            $this->addProduct($name, $type, $price, $size, $color, $image_path, $description);
            header('Location: ' . '/Admin/Manage/Product');
        }
    }
    function addProduct($name, $type, $price, $size, $color, $image_path, $description)
    {
        $this->product = new Products();
        $this->product->addProduct($name, $type, $price, $size, $color, $image_path, $description);
    }
    function DeleteProductById($id)
    {
        $this->product = new Products();
        $this->product->deleteProduct($id);
        header('Location: ' . '/Admin/Manage/Product');
    }
    function ShowProductById($id)
    {
        $this->product = new Products();
        $this->view('dashboard', [
            'page' => 'Edit',
            'id' => $this->product->getProductById($id)->getId(),
            'name' => $this->product->getProductById($id)->getName(),
            'color' => $this->product->getProductById($id)->getColor(),
            'size' => $this->product->getProductById($id)->getSize(),
            'desscription' => $this->product->getProductById($id)->getDes(),
            'price' => $this->product->getProductById($id)->getPrice()
        ]);
    }
}
