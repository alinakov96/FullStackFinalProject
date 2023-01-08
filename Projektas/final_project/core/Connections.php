<?php

class Connections {

    protected $connection; 

    public function __construct(){
        $this->connect();
    }

    private function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "final_project";
        
        try {
          $this->connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
          $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }
}