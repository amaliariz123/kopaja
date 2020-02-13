<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingSoalController extends Controller
{
    public function indexContohSoal()
    {
    	return view('setting_soal.contoh_soal_index');
    }

    public function indexLatihanSoal()
    {
    	return view('setting_soal.latihan_soal_index');
    }
}
