<?php

namespace App\Models;

use \App\Core\PDOFactory;
use PDO;

class Order_Items
{

    private $pdo;
    private $id;
    private $order_id;
    private $product_id;
    private $quantity;

    public function __construct()
    {
        $this->pdo = PDOFactory::create();
    }
    public function fill($data)
    {
        [
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity
        ] = $data;
        return $this;
    }
    public function save() {
        $sql = "INSERT INTO order_items(order_id, product_id, quantity) VALUE (:order_id, :product_id, :quantity)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity
        ]);
        return $this;
    }
}
