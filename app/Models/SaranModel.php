<?php

namespace App\Models;

use CodeIgniter\Model;

class SaranModel extends Model
{
    protected $table      = 'kotak_saran';
    protected $primaryKey = 'id_saran';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'no_telp', 'subject', 'pesan', 'create_at', 'updated_at'];
}
