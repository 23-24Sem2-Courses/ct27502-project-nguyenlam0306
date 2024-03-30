<?php

namespace App\Core;

use PDO;

class PDOFactory
{
    public static function create()
    {
        try {
            $dbhost = $_ENV['DB_HOST'];
            $dbname = $_ENV['DB_NAME'];
            $dbuser = $_ENV['DB_USER'];
            $dbpass = $_ENV['DB_PASS'];
            $dsn = "mysql:host={$dbhost};dbname={$dbname};charset=utf8mb4";
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            return new PDO($dsn, $dbuser, $dbpass, $options);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
