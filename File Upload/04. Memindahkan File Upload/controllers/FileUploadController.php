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

        // # Nama file upload di generate Laravel
        // $path = $request->berkas->store('uploads');

        // # Nama file upload adalah "berkas"
        // $path = $request->berkas->storeAs('uploads','berkas');

        // # Nama file upload sama seperti nama file asal
        // $namaFile = $request->berkas->getClientOriginalName();
        // $path = $request->berkas->storeAs('uploads',$namaFile);

        # Nama file upload di generate dari nama user + time() seperti nama file asal
        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile = 'lisa-'.time().".".$extFile;
        $path = $request->berkas->storeAs('uploads',$namaFile);

        echo "Proses upload berhasil, file berada di: $path";
    }
}
