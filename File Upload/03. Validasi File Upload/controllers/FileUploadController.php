<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){

        // # Validasi required
        // $request->validate([
        //     'berkas'  => 'required',
        // ]);

        # Validasi tipe data dan maksimum file
        $request->validate([
             'berkas'  => 'required|file|image|max:1000',
        ]);

        echo $request->berkas->getClientOriginalName()." Lolos Validasi";
    }
}
