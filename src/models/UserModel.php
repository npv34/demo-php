<?php

namespace src\Model;

use Exception;

class UserModel
{
    private $connection;

    function __construct()
    {
        $db = new DBConnect('mysql:host=127.0.0.1;dbname=quiz-backend', 'root', '123456@Abc');
        $this->connection = $db->connection();
    }

    function getAllUsers(): bool|array
    {
        $sql = 'SELECT * FROM users';
        $result = $this->connection->query($sql);
        return $result->fetchAll();
    }

    function store($name, $email, $password)
    {
        try {
            $sql = 'INSERT INTO users (name ,email, password) VALUES (?, ?, ?) ';
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $password);
            $stmt->execute();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            die();
        }
    }

    function destroy($id): void
    {
        try {
            $sql = 'DELETE FROM users WHERE id = ?';
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(1, $id);
            $stmt->execute();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            die();
        }
    }
}