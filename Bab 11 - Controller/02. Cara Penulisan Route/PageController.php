<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return "Halaman Home";
    }

    public function tampil()
    {
        return "Data Mahasiswa";
    }
}
