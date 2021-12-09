<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table      = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    protected $useTimestamps = true;
    protected $allowedFields = ['tanggal_pendaftaran', 'id_vaksin', 'create_at', 'updated_at'];
}
