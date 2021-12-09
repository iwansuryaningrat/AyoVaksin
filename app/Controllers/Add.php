<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;
use App\Models\PenerimavaksinModel;
use App\Models\PenyediaModel;
use App\Models\SaranModel;
use App\Models\SertifikatModel;
use App\Models\TiketModel;
use App\Models\UsersModel;
use App\Models\VaksinModel;

class Add extends BaseController
{
    protected $pendaftaranModel;
    protected $penerimavaksinModel;
    protected $penyediaModel;
    protected $saranModel;
    protected $sertifikatModel;
    protected $tiketModel;
    protected $usersModel;
    protected $vaksinModel;

    public function __construct()
    {
        $this->pendaftaranModel = new PendaftaranModel();
        $this->penerimavaksinModel = new PenerimavaksinModel();
        $this->penyediaModel = new PenyediaModel();
        $this->saranModel = new SaranModel();
        $this->sertifikatModel = new SertifikatModel();
        $this->tiketModel = new TiketModel();
        $this->usersModel = new UsersModel();
        $this->vaksinModel = new VaksinModel();
    }
}
