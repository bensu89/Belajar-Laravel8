<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return "Halaman Home Admin";
    }

    public function tampil()
    {
        return "Data Mahasiswa Admin";
    }

    public function cobaFacade()
    {
        echo \Illuminate\Support\Str::snake('SedangBelajarLaravelUncover');
        echo "<br>";
        echo \Illuminate\Support\Str::kebab('SedangBelajarLaravelUncover');
    }

}
