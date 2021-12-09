<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $table      = 'tiket';
    protected $primaryKey = 'id_tiket';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'id_pendaftaran', 'create_at'];
}
