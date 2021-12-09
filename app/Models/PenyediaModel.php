<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyediaModel extends Model
{
    protected $table      = 'penyedia_layanan';
    protected $primaryKey = 'id_penyedia';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_instansi', 'no_surat_tugas', 'email', 'no_telp', 'alamat', 'kode_pos', 'id_login', 'create_at', 'updated_at'];
}
