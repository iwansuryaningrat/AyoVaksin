<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerimavaksinModel extends Model
{
    protected $table      = 'calon_penerima_vaksin';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nik', 'kk', 'tgl_lahir', 'jenis_kelamin', 'usia', 'email', 'no_telp', 'alamat', 'kode_pos', 'id_login', 'create_at', 'updated_at'];
}
