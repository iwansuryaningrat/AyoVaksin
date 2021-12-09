<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_login';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'password', 'id_role', 'create_at'];
}
