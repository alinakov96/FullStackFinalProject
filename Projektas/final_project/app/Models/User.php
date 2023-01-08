<?php

require_once __DIR__  . "/../../core/Connections.php";

class User extends Connections
{

    public $table = 'users';

    public function getAll(): Array
    {
        return $this->connection->query("SELECT * FROM {$this->table}")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($id): array|bool
    {
       $sqlUser = "SELECT * FROM {$this->table} WHERE id = ?";
       $stmt = $this->connection->prepare($sqlUser);
       $stmt->execute([$id]);
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       
       return $result;
    }

    public function getByCredentials($id): array|bool
    {
       $sqlUser = "SELECT * FROM {$this->table} WHERE email = ?";
       $stmt = $this->connection->prepare($sqlUser);
       $stmt->execute([$id]);
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       
       return $result;
    }
}