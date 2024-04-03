<?php

namespace App\Models;

use PDO;
use App\Core\PDOFactory;

class Products
{
    private $pdo;

    private $tableName = 'products';

    private $id = -1;

    private $name;

    private $type;
    private $description;
    private $size;
    private $color;
    private $price;
    private $image_path;
    public function __construct()
    {
        $this->pdo = PDOFactory::create();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getDes()
    {
        return $this->description;
    }
    public function setDes($description): self
    {
        $this->description = $description;
        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price): self
    {
        $this->price = $price;
        return $this;
    }
    public function getImage_path()
    {
        return $this->image_path;
    }
    public function setImage_path($image_path): self
    {
        $this->image_path = $image_path;
        return $this;
    }
    public function getSize()
    {
        return $this->price;
    }
    public function setSize($size): self
    {
        $this->size = $size;
        return $this;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getProductInfor()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'size' => $this->size,
            'color' => $this->color,
            'description' => $this->description,
            'price' => $this->price,
            'image_path' => $this->image_path
        ];
    }
    public function fillFromDB($product)
    {
        [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'size' => $this->size,
            'color' => $this->color,
            'description' => $this->description,            
            'price' => $this->price,
            'image_path' => $this->image_path
        ] = $product;

        return $this;
    }
    public function getAllProducts()
    {
        $products = [];

        $statement = PDOFactory::create()->prepare('select * from products');
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $product = new Products();
            $product->fillFromDB($row);
            $products[] = $product;
        }
        return $products;
    }
    public function getProductById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->tableName} WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $product = new Products();
        $product->fillFromDB($stmt->fetch(PDO::FETCH_ASSOC));
        return $product;
    }
    public function addProduct($name, $type, $price, $size, $color, $image_path,$description)
    {
        $stmt = $this->pdo->prepare("INSERT INTO {$this->tableName} (name,type, price, size,color, image_path, description) VALUES (:name, :type, :price, :size, :color ,:image_path, :description)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':image_path', $image_path);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function updateProduct($id, $name, $type,$size,$color, $description, $price, $image_path)
    {
        $sql = "UPDATE products SET name=?, type=? ,size=?, color=?, description=?, price=?, image_path=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name, $type,$size, $color, $description, $price, $image_path, $id]);
        header("location" . "/Admin/Manage/Product");
        
    }

}
