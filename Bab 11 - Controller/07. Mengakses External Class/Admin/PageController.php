<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Coba\Foo;

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

    public function cobaClass()
    {
        // $foo = new \App\Http\Controllers\Coba\Foo();
        // echo $foo->bar();

        $foo = new Foo();
        echo $foo->bar();
    }

}
