<?php

namespace Database;

use PDO;

class DB extends PDO {
    private $connection;

    public function __construct() {
        $this->connection = new PDO('mysql:host=localhost;dbname=php-mvc', 'development', 'root@2023');
    }

    private function setParams($statment, $parameters = []) {
        foreach ($parameters as $key => $value) {
            $this->setParam($statment, $key, $value);
        }
    }

    private function setParam($statment, $key, $value) {
        $statment->bindParam($key, $value);
    }

    public function runQuery($rawQuery, $params = []) {
        $statment = $this->connection->prepare($rawQuery);

        $this->setParams($statment, $params);

        $statment->execute();

        return $statment;
    }

    public function select($rawQuery, $params = []) {
        $statment = $this->runQuery($rawQuery, $params);

        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }
}