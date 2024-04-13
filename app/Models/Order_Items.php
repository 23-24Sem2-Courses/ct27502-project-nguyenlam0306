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
    public function save()
    {
        $sql = "INSERT INTO order_items(order_id, product_id, quantity) VALUE (:order_id, :product_id, :quantity)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity
        ]);
        return $this;
    }
    public function fillFromDB($order_items)
    {
        [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity
        ] = $order_items;
        return $this;
    }
    public function getbyOrderId($order_id)
    {
        $order_items = [];
        $sql = "SELECT * FROM order_items WHERE order_id = :order_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'order_id' => $order_id
        ]);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $order_item = new Order_Items();
            $order_item->fillFromDB($row);
            $order_items[] = $order_item;
        }
        return $order_items;
    }
    public function getOrderItemsInfor()
    {
        return [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity
        ];
    }
}
