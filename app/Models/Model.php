<?php

namespace app\Models;
use Database\DB;

class Model {    
    protected $table = null;

    public function setTable($table) {
        $this->table = $table;
    }

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
}