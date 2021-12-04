<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index',['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
        return view('mahasiswa.create');
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

        Mahasiswa::create($validateData);

        // Untuk percobaan
        // $request->session()->flash('pesan','Penambahan data berhasil');

        // Cara 1
        // $request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        // return redirect()->route('mahasiswas.index');

        // Cara 2
        return redirect()->route('mahasiswas.index')->with('pesan',"Penambahan data {$validateData['nama']} berhasil");
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show',['mahasiswa' => $mahasiswa]);
    }

}
