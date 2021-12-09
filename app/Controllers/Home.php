<?php

namespace App\Controllers;

class Home extends BaseController
{
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
}
