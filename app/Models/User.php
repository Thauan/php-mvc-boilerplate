<?php

namespace app\Models;

use app\Models\Model;

class User extends Model
{
  protected $table = 'users';
  public function __construct()
  {
    $this->setTable($this->table);
  }
}
