<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
       return "Tabel mahasiswa di sini";
    }

    public function create()
    {
        return view('form-pendaftaran');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim'           => 'required|size:8',
            'nama'          => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan'       => 'required',
            'alamat'        => '',
        ]);

        dump($validateData);
    }
}
