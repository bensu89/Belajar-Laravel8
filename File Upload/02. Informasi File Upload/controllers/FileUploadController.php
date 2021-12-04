<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        // dump($request->berkas);

        if($request->hasFile('berkas'))
        {
            echo "path(): ".$request->berkas->path();
            echo "<br>";
            echo "extension(): ".$request->berkas->extension();
            echo "<br>";
            echo "getClientOriginalExtension(): ".
                 $request->berkas->getClientOriginalExtension();
            echo "<br>";
            echo "getMimeType(): ".$request->berkas->getMimeType();
            echo "<br>";
            echo "getClientOriginalName(): ".
                 $request->berkas->getClientOriginalName();
            echo "<br>";
            echo "getSize(): ".$request->berkas->getSize();
        }
        else
        {
            echo "Tidak ada berkas yang diupload";
        }
    }
}
