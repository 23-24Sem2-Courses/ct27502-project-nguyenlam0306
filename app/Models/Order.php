<?php

namespace App\Models;

use PDO;
use App\Core\PDOFactory;

class Order
{
    private $pdo;
    private $items;
    private $order_id;
    private $customer_id;
    private $status;
    private $address;
    public function __construct()
    {
        $this->pdo = PDOFactory::create();
    }
    function getOrderbyId($order_id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM orders WHERE order_id= :order_id");
        $statement->execute(['order_id' => $order_id]);
        $order = new Order();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $order->fillFromDB($row);
        }
        return $order;
    }

    public function fillFromDB($order)
    {
        [
            'order_id' => $this->order_id,
            'customer_id' => $this->customer_id,
            'status' => $this->status,
            'address' => $this->address
        ] = $order;

        return $this;
    }
    public function fill($order)
    {
        [
            'customer_id' => $this->customer_id,
            'address' => $this->address
        ] = $order;
        return $this;
    }
    public function getId()
    {
        return $this->order_id;
    }
    public function setId($id)
    {
        $this->order_id = $id;
        return $this;
    }
    public function getUserId()
    {
        return $this->customer_id;
    }
    public function setUserId($customer): self
    {
        $this->customer_id = $customer;
        return $this;
    }
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }
}
