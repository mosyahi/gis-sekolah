<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['nama', 'email', 'password'];

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
