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
        $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
        "Lisa Permata"];

        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
}
