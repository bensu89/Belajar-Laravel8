<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function cekObject(){
        $mahasiswa = new Mahasiswa;

        dump($mahasiswa);
    }

    public function insert(){
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '19003036';
        $mahasiswa->nama = 'Sari Citra Lestari';
        $mahasiswa->tanggal_lahir = '2001-12-31';
        $mahasiswa->ipk = 3.5;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function massAssignment(){
        Mahasiswa::create(
                [
                    'nim' => '19021044',
                    'nama' => 'Rudi Permana',
                    'tanggal_lahir' => '2000-08-22',
                    'ipk' => 2.5,
                ]
        );

        // Jika property $fillable atau $guarded tidak di set, akan tampil
        // error "Add [nim] to fillable property to allow mass assignment on [App\Models\Mahasiswa]."

        return "Berhasil di proses";
    }

    public function massAssignment2(){
        $mahasiswa1 = Mahasiswa::create(
            [
                'nim' => '19002032',
                'nama' => 'Rina Kumala Sari',
                'tanggal_lahir' => '2000-06-28',
                'ipk' => 3.4,
            ]
        );
        dump($mahasiswa1);

        $mahasiswa2 = Mahasiswa::create(
            [
                'nim' => '18012012',
                'nama' => 'James Situmorang',
                'tanggal_lahir' => '1999-04-02',
                'ipk' => 2.7,
            ]
         );
         dump($mahasiswa2);

         $mahasiswa3 = Mahasiswa::create(
            [
                'nim' => '19005011',
                'nama' => 'Riana Putria',
                'tanggal_lahir' => '2000-11-23',
                'ipk' => 2.9,
            ]
        );
        dump($mahasiswa3);
    }

    public function update(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->tanggal_lahir = '2001-01-01';
        $mahasiswa->ipk = 2.9;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function updateWhere(){
        $mahasiswa = Mahasiswa::where('nim','19003036')->first();
        $mahasiswa->tanggal_lahir = '2001-12-31';
        $mahasiswa->ipk = 4.0;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function massUpdate(){
        Mahasiswa::where('nim','19003036')->first()->update([
            'tanggal_lahir' =>'2000-04-20',
            'ipk' => 2.1
        ]);
        return "Berhasil di proses";
    }

    public function delete(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->delete();

        dump($mahasiswa);
        // error jika mahasiswa tidak ditemukan
    }

    public function destroy(){
        $mahasiswa = Mahasiswa::destroy(1);
        dump($mahasiswa);
        // tidak error jika mahasiswa tidak ditemukan
        // bisa juga seperti ini: Mahasiswa::destroy([3, 9, 10]);
    }

    public function massDelete(){
        $mahasiswa = Mahasiswa::where('ipk','>',2)->delete();
        dump($mahasiswa);
    }

    public function all(){
        $result = Mahasiswa::all();
        // dump($result);

        // echo($result[0]->id). '<br>';
        // echo($result[0]->nim). '<br>';
        // echo($result[0]->nama). '<br>';
        // echo($result[0]->tanggal_lahir). '<br>';
        // echo($result[0]->ipk);

        foreach ($result as $mahasiswa) {
            echo($mahasiswa->id). '<br>';
            echo($mahasiswa->nim). '<br>';
            echo($mahasiswa->nama). '<br>';
            echo($mahasiswa->tanggal_lahir). '<br>';
            echo($mahasiswa->ipk). '<br>';
            echo "<hr>";
        }
    }

    public function allView(){
        $mahasiswas = Mahasiswa::all();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswas]);
    }

    public function getWhere(){
        $mahasiswas = Mahasiswa::where('ipk','<','3')
            ->orderBy('nama', 'desc')
            ->get();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswas]);
    }

    public function testWhere(){
        $mahasiswa = Mahasiswa::where('nim','18012012')->get();
        dump($mahasiswa);
    }

    public function first(){
        // $mahasiswa = Mahasiswa::where('nim','18012012')->first();
        // dump($mahasiswa);

        // Perbandingan antara hasil collection dengan object
        //  $mahasiswa = Mahasiswa::where('nim','18012012')->get();
        //  echo $mahasiswa[0]->nama;    // James Situmorang

        //  $mahasiswa = Mahasiswa::where('nim','18012012')->first();
        //  echo $mahasiswa->nama;       // James Situmorang

        $mahasiswa = Mahasiswa::where('ipk','<','3')->first();
        return view('tampil-mahasiswa',['mahasiswas' => [$mahasiswa]]);
    }

    public function find(){
        $mahasiswa = Mahasiswa::find(8);
        return view('tampil-mahasiswa',['mahasiswas' => [$mahasiswa]]);
    }

    public function latest(){
        $mahasiswa = Mahasiswa::latest()->get();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswa]);
    }

    public function limit(){
        $mahasiswa = Mahasiswa::latest()->limit(2)->get();
        // $mahasiswa = Mahasiswa::orderBy('created_at','desc')->limit(2)->get();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswa]);
    }

    public function skipTake(){
        $mahasiswa = Mahasiswa::orderBy('ipk')->skip(1)->take(3)->get();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswa]);
    }
}
