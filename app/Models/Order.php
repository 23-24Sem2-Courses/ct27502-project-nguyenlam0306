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
    public function getAllOrder()
    {
        $orders = [];
        $stmt = $this->pdo->prepare("SELECT * FROM orders");
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $order = new Order();
            $order->fillFromDB($row);
            $orders[] = $order;
        }
        return $orders;
    }
    public function getOrderId()
    {
        return $this->order_id;
    }
    public function getCustomerName()
    {
        $sql_query = "SELECT users.fullname FROM 
        orders inner join users on 
        orders.customer_id = users.id 
        where users.id = :customer_id";
        $stmt = $this->pdo->prepare($sql_query);
        $stmt->bindParam(':customer_id', $this->customer_id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $customer_name = $row['fullname'];
            return $customer_name;
        }
    }
    public function getStatusString()
    {
        switch ($this->status) {
            case 0:
                return 'Đã xác nhận';
            case 1:
                return 'Đang giao';
            case 2:
                return 'Đã giao';
            case 3:
                return 'Đã hủy';
        }
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function changeStatus($order_id, $status)
    {
        $sql = "UPDATE orders SET orders.status = :status where orders.order_id= :order_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':order_id', $order_id);
        $stmt->execute();
        echo '<script>alert("Đã cập nhật tình trạng");setTimeout(function(){window.location.href="/Admin/Manage/Order";}, 1000);</script>';
    }
    public function save()
    {
        $sql = "INSERT INTO orders(customer_id, address) VALUES (:customer_id, :address)";
        $stmt = $this->pdo->prepare($sql);      
        $stmt->execute([
            'customer_id', $this->customer_id,
            'address', $this->address
        ]);
        $this->order_id = $this->pdo->lastInsertId();
        return $this;
    }
    public function getOrderInfor()
    {
        return [
            'order_id' => $this->order_id,
            'customer_id' => $this->customer_id,
            'status' => $this->status,
            'address' => $this->address
        ];
    }
}
