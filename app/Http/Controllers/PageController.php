<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tampil()
    {
        $arrMahasiswa = ["Megawati", "Luhut", "SBY", "Prabowo"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
}
