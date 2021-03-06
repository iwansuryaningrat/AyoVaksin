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

class Home extends BaseController
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

    public function index()
    {
        $data = [
            'title' => 'Home | AyoVaksin',
            'tab' => 'home'
        ];

        return view('users/index', $data);
    }

    public function alur()
    {
        $data = [
            'title' => 'Alur | AyoVaksin',
            'tab' => 'alur'
        ];

        return view('users/alur', $data);
    }

    public function daftarVaksin()
    {
        $data = [
            'title' => 'Daftar Vaksin | AyoVaksin',
            'tab' => 'vaksin'
        ];

        return view('users/daftar-vaksin', $data);
    }

    public function saran()
    {
        $data = [
            'title' => 'Kotak Saran | Ayovaksin',
            'tab' => 'saran'
        ];

        return view('users/saran', $data);
    }

    public function kebijakanprivasi()
    {
        $data = [
            'title' => 'Kebijakan Privasi | Ayovaksin',
            'tab' => 'privasi'
        ];

        return view('users/kebijakan-privasi', $data);
    }

    public function penyediavaksin()
    {
        $data = [
            'title' => 'Bantu Vaksinasi | AyoVaksin',
            'tab' => 'vaksin'
        ];

        return view('users/penyedia-vaksin', $data);
    }

    public function riwayat()
    {
        $data = [
            'title' => 'Riwayat Kami | AyoVaksin',
            'tab' => 'riwayat'
        ];

        return view('users/riwayat', $data);
    }

    public function periksa()
    {
        $nama = $this->request->getVar('namaLengkap');
        $nik = $this->request->getVar('nik');
        $data = [1];

        // mencari data vaksin dari database

        // Memasukkan data sertif ke variabel data

        if ($nama) {
            // Kondisi setelah sudah Vaksin
            return view('users/periksa-sudah', $data);
        } else {
            // Kondisi Belum Vaksin
            return view('users/periksa-belum', $data);
        }
    }

    public function login()
    {
        $data = [
            'title' => 'Form Log In | AyoVaksin',
            'tab' => 'login'
        ];

        return view('users/login-akun', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Sign In | AyoVaksin',
            'tab' => 'register'
        ];

        return view('users/register', $data);
    }
}
