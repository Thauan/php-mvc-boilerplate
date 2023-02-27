<?php

namespace app\Models;
use Database\DB;

class Model {    
    protected $table = null;

    public function getAll() {
        $database = new DB();
        $query = $database->select("SELECT * FROM {$this->table}");

        return $query;
    }

    public function findByName($name) {
        $database = new DB();
        $query = $database->select("SELECT * FROM {$this->table} WHERE name = {$name}");

        return $query;
    }

    public function save($attributes) {
        $database = new DB();
        $query = $database->runQuery("INSERT INTO {$this->table} ('user_id', 'email', 'name', 'password') VALUES ({$attributes['user_id']}, {$attributes['email']}, {$attributes['name']}, {$attributes['password']})");

        return $query;
    }
}