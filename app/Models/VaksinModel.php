<?php

namespace App\Models;

use CodeIgniter\Model;

class VaksinModel extends Model
{
    protected $table      = 'vaksin';
    protected $primaryKey = 'id_vaksin';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_vaksin', 'waktu', 'tanggal_vaksinasi', 'id_penyedia', 'kuota', 'stok', 'ketentuan', 'create_at', 'updated_at'];
}
