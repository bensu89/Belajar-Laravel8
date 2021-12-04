<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        $request->validate([
             'berkas'  => 'required|file|image|max:1000',
        ]);

        # Nama file upload di generate dari nama user + time() seperti nama file asal
        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile = 'lisa-'.time().".".$extFile;

        # Pindahkan file upload ke public
        $path = $request->berkas->move('image',$namaFile);
        echo "Variabel path berisi: $path <br>";

        $pathBaru = asset($path);
        echo "Proses upload berhasil, file berada di:
        <a href='$pathBaru'>$pathBaru</a>";
    }
}
