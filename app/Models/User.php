<?php

namespace App\Models;

use App\Models\Model;

class User extends Model{

    protected $table = 'users';

    public function getByUserEmail(string $email): User
    {
        return $this->query("SELECT * FROM {$this->table} WHERE email = ? ", [$email], true);

    }
}