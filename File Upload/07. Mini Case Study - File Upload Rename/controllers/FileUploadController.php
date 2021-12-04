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

    public function fileUploadRename(){
        return view('file-upload-rename');
    }

    public function prosesFileUploadRename(Request $request){
        $request->validate([
            'nama_gambar' => 'required|min:5|alpha_dash',
            'gambar_profile'  => 'required|file|image|max:1000',
       ]);

       // ambil nama extension file asal
       $extFile = $request->gambar_profile->getClientOriginalExtension();
       // generate nama file akhir, diambil dari inputan nama_gambar + extension
       $namaFile = $request->nama_gambar.".".$extFile;
       // pindahkan file upload ke folder storage/app/public/gambar/
       $request->gambar_profile->storeAs('public/gambar',$namaFile);

       // generate path gambar yang bisa diakses (path di folder public)
       $pathPublic = asset('storage/gambar/'.$namaFile);

       echo "Gambar berhasil di upload ke <a href=".$pathPublic.">$namaFile</a>";
       echo "<br>";
       echo "<img src=".$pathPublic." width='200px'>";
    }
}
