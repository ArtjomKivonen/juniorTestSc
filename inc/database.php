<?php

class Database
{
    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;
    private $tableName = "products";

    public function __construct()
    {
        $this->host = 'localhost';//hostname
        $this->user = 'root';//username
        $this->password = '';//password
        $this->baseName = 'juniortest';
        $this->connect();
    }

    public function __destruct()
    {
        $this->disconnect();
    }

    public function connect()
    {
        try {
            $this->conn = new PDO(
                'mysql:host='.$this->host.''
                .';dbname='.$this->baseName.'',
                $this->user,
                $this->password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
            );
        } catch (Exception $e) {
            die('Connection failed : '.$e->getMessage());
        }

        return $this->conn;
    }

    public function disconnect()
    {
        if ($this->conn) {
            $this->conn = null;
        }
    }
    //

    //
    public static function getAll()
    {
        $database = new Database();
//        $db = $database->__construct();
        $query = "SELECT sku, name, price, size, weight, height, width, length, type FROM ".$database->tableName." ORDER BY sku ASC";
        $stmt = $database->conn->prepare($query);
        $stmt->execute();
//        $stmt->setFetchMode(PDO::FETCH_ASSOC);
//        $stmt = $stmt->fetchAll();
        return $stmt;
    }
    public static function addProduct()
    {
        echo 'addpro';
        $product = new $_POST['type']($_POST['sku'], $_POST['name'], $_POST['price'],
            $_POST['size'] ?? null,
            $_POST['weight'] ?? null,
            $_POST['height'] ?? null,
            $_POST['width'] ?? null,
            $_POST['length'] ?? null,
            $_POST['type']);



        $database = new Database();
        $query = "INSERT INTO ".$database->tableName."
            (sku, name, price, size, weight, height, width, length, type) VALUES (
            :sku = {$product->getSku()}, :name = {$product->getName()}, :price = {$product->getPrice()}, :type = {$product->getType()}, 
//            :size = null,
//            :weight = null,
//            :height = null,
//            :width = null,
//            :length = null
            )";
        $stmt = $database->conn->prepare($query);
        $stmt->execute();
//        [
//            ':sku' => $product->getSku(),
//            ':name' => $product->getName(),
//            ':price' => $product->getPrice(),
//            ':size' => $product->getSize(),
//            ':weight' => null,
//            ':height' => null,
//            ':width' => null,
//            ':length' => null,
//            ':type' => $product->getType()
//            ':weight' => $product->getWeight(),
//            ':height' => $product->getHeight(),
//            ':width' => $product->getWidth(),
//            ':length' => $product->getLength(),
//            ':type' => $product->getType()
//        ]);
        return $stmt;
    }
//    public static function getTypes()
//    {
//        $database = new Database();
////        $db = $database->__construct();
//        $query = "SELECT DISTINCT(*) type FROM ".$database->tableName;
//        $stmt = $database->conn->prepare($query);
//        $stmt->execute();
////        $stmt->setFetchMode(PDO::FETCH_ASSOC);
////        $response = $stmt->fetchAll();
//        return $stmt;
//    }
    public static function massDelete()
    {
        $prods_checked = implode(', ', $_POST['checkbox']);
        $database = new Database();
        $query = "DELETE FROM ".$database->tableName." WHERE `sku` IN (".$prods_checked.")";
        $stmt = $database->conn->prepare($query);
        $stmt->execute();
        $path = '';
        return $stmt;
    }

}//end class
