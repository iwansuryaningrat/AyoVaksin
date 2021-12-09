<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikatModel extends Model
{
    protected $table      = 'sertifikat';
    protected $primaryKey = 'id_sertifikat';
    protected $useTimestamps = true;
    protected $allowedFields = ['no_sertifikat', 'id_tiket', 'batch_id', 'create_at'];
}
