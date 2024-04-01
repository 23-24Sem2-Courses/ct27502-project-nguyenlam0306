<?php

namespace App\Models;

use PDO;
use App\Core\PDOFactory;

class User
{
    private $pdo;
    private $errors = [];
    private $id = -2;
    private $username;
    private $fullname;
    private $phonenumber;
    private $password;
    private $hashing_pass;
    private $notes;
    private $added_on;
    private $updated_on;

    public function __construct()
    {
        $this->pdo = PDOFactory::create();
    }
    public function getID()
    {
        return  $this->id;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function getFullName()
    {
        return $this->fullname;
    }

    public function getPhoneNumber()
    {
        return $this->phonenumber;
    }

    public function fill($user)
    {
        [
            'username' => $this->username,
            'fullname' => $this->fullname,
            'phone' => $this->phonenumber,
            'password' => $this->password
        ] = $user;

        return $this;
    }
    public function fillFormDB($user)
    {
        [
            'id' => $this->id,
            'username' => $this->username,
            'fullname' => $this->fullname,
            'hashing_password' => $this->hashing_pass,
            'phonenumber' => $this->phonenumber,
            'notes' => $this->notes,
            'added_on' => $this->added_on,
            'updated_on' => $this->updated_on
        ] = $user;

        return $this;
    }
    public function getAllUser()
    {
        $users = [];
        $statement = PDOFactory::create()->prepare('select * from users');
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $user = new User();
            $user->fillFormDB($row);
            $users[] = $user;
        }
        return $users;
    }
    public function save()
    {
        $result = false;
        $this->hashingPassword();
        if ($this->id >= 0) {
            $statement = $this->pdo->prepare('UPDATE users SET username = :username, fullname = :fullname, phonenumber =:phonenumber, hashing_pass = :hashing_pass, added_on = now() WHERE id=:id');
            $statement->execute([
                'username' => $this->username,
                'fullname' => $this->fullname,
                'phonenumber' => $this->phonenumber,
                'hashing_pass' => $this->hashing_pass,
                'id' => $this->id
            ]);
        } else {
            $statement = $this->pdo->prepare('INSERT INTO users(username, fullname, phone, hashing_password, added_on, updated_on) VALUES (:username, :fullname, :phonenumber, :hashing_pass, now(), now())');
            $statement->execute([
                'username' => $this->username,
                'fullname' => $this->fullname,
                'phonenumber' => $this->phonenumber,
                'hashing_pass' => $this->hashing_pass
            ]);
            $this->id = $this->pdo->lastInsertId();
        }
    }
    public function hashingPassword()
    {
        $this->hashing_pass = password_hash($this->password, PASSWORD_DEFAULT);
        return $this;
    }

    public function findByUsername($username)
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE username = :username LIMIT 1');
        $statement->execute([
            'username' => $username
        ]);

        if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $this->fillFormDB(($row));
            return $this;
        }
        return false;
    }
    public function authenticate($username, $password)
    {
        if ($this->findByUsername($username)) {
            if (password_verify($password, $this->password)) {
                return $this;
            }
        }
        return false;
    }

    public function checkUsernameExists($username)
    {
        return $this->findByUsername($username) ? true : false;
    }

    public function checkPhoneExists($phone)
    {
        return $this->findByPhone($phone) ? true : false;
    }

    public function findByPhone($phonenumber)
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE phonenumber = :phonenumber LIMIT 1');
        $statement->execute([
            'phonenumber' => $phonenumber
        ]);

        if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $this->fillFormDB(($row));
            return $this;
        }
        return false;
    }
    public function findById($id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE id = :id LIMIT 1');
        $statement->execute([
            'id' => $id
        ]);

        if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $this->fillFormDB(($row));
            return $this;
        }
        return false;
    }

    public function validate()
    {
        if (strlen(trim($this->username)) < 1) {
            $this->errors[] = "Tên đăng nhập không hợp lệ";
        }

        if (strlen(trim($this->fullname)) < 1) {
            $this->errors[] = "Tên không hợp lệ";
        }
        if (!preg_match('/^(0|84)(2(0[3-9]|1[0-6|8|9]|2[0-2|5-9]|3[2-9]|4[0-9]|5[1|2|4-9]|6[0-3|9]|7[0-7]|8[0-9]|9[0-4|6|7|9])|3[2-9]|5[5|6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])([0-9]{7})$/', $this->phonenumber)) {
            $this->errors[] = "Số điện thoại không hợp lệ";
        }
        if (strlen($this->password) < 8) {
            $this->errors[] = "Password phải có ít nhất 8 kí tự";
        }
    }
}
