<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MahasiswaController extends Controller
{
    public function formPendaftaran()
    {
        return view('form-pendaftaran');
    }

    public function formPendaftaranId()
    {
        App::setLocale('id');
        return view('form-pendaftaran');
    }

    public function formPendaftaranEn()
    {
        App::setLocale('en');
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request)
    {
        $validateData = $request->validate([
            'nim'           => 'required|size:8',
            'nama'          => 'required|min:3|max:50',
            'email'         => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan'       => 'required',
            'alamat'        => '',
        ]);

        dump($validateData);
    }
}
