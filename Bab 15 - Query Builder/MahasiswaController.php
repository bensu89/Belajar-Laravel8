<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insert(){
        $result = DB::table('mahasiswas')->insert(
            [
                'nim' => '19003036',
                'nama' => 'Sari Citra Lestari',
                'tanggal_lahir' => '2001-12-31',
                'ipk' => 3.5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        dump($result);
    }

    public function insertBanyak(){
        $result = DB::table('mahasiswas')->insert(
            [
                [
                    'nim' => '19002032',
                    'nama' => 'Rina Kumala Sari',
                    'tanggal_lahir' => '2000-06-28',
                    'ipk' => 3.4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nim' => '18012012',
                    'nama' => 'James Situmorang',
                    'tanggal_lahir' => '1999-04-02',
                    'ipk' => 2.7,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]

        );

        dump($result);
    }

    public function update(){
        $result = DB::table('mahasiswas')
            ->where('nama','Sari Citra Lestari')
            ->update(
            [
                'tanggal_lahir' => '2002-01-01',
                'ipk' => 3.19,
                'updated_at' => now(),
            ]
        );

        dump($result);
    }

    public function updateWhere(){
        $result = DB::table('mahasiswas')
            ->where('ipk','<',3)
            ->where('nama','<>','alex')
            ->update(
            [
                'tanggal_lahir' => '2002-01-01',
                'updated_at' => now(),
            ]
        );

        dump($result);
    }

    public function updateOrInsert(){
        $result = DB::table('mahasiswas')->updateOrInsert(
            [
                'nim' => '19005011',
            ],
            [
                'nama' => 'Riana Putria',
                'tanggal_lahir' => '2000-11-23',
                'ipk' => 2.7,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        dump($result);
    }

    public function delete(){
        $result = DB::table('mahasiswas')
            ->where('ipk','>=',3.4)
            ->delete();

        dump($result);
    }

    public function get(){
        $result = DB::table('mahasiswas')->get();

        dump($result);
    }

    public function getTampil(){
        $result = DB::table('mahasiswas')->get();

        echo($result[0]->id). '<br>';
        echo($result[0]->nim). '<br>';
        echo($result[0]->nama). '<br>';
        echo($result[0]->tanggal_lahir). '<br>';
        echo($result[0]->ipk);
    }

    public function getView(){
        $result = DB::table('mahasiswas')->get();
        return view('tampil-mahasiswa',['mahasiswas' => $result]);
    }

    public function getWhere(){
        $result = DB::table('mahasiswas')
            ->where('ipk','<','3')
            ->orderBy('nama', 'desc')
            ->get();

        return view('tampil-mahasiswa',['mahasiswas' => $result]);
    }

    public function select(){
        $result = DB::table('mahasiswas')
            ->select('nim', 'nama as nama_mahasiswa')
            ->get();

        dump($result);
    }

    public function take(){
        $result = DB::table('mahasiswas')
                  ->orderBy('nama', 'asc')->skip(1)->take(2)->get();

        return view('tampil-mahasiswa',['mahasiswas' => $result]);
    }

    public function first(){
        $result = DB::table('mahasiswas')
                  ->where('nama','James Situmorang')->first();

        // dump ($result); // ini bukan array dari object, tapi langsung object saja

        // ini akan error
        // return view('tampil-mahasiswa',['mahasiswas' => $result]);

        // Seharusnya dijalankan sebagai berikut
        return view('tampil-mahasiswa',['mahasiswas' => [$result]]);
    }

    public function find(){
        //$result = DB::table('mahasiswas')->find(5);
        $result = DB::table('mahasiswas')->where('id',5)->first();
        return view('tampil-mahasiswa',['mahasiswas' => [$result]]);
    }

    public function raw(){
        $result = DB::table('mahasiswas')
            ->selectRaw('count(*) as total_mahasiswa')
            ->get();

        echo($result[0]->total_mahasiswa). '<br>';
    }

    public function index(){
        $result = DB::table('mahasiswas')->select('nim', 'nama')->get();
        return view('index-mahasiswa',['mahasiswas' => $result]);
    }

    public function mahasiswa($nim){
        // return $nim;

        $result = DB::table('mahasiswas')->where('nim',$nim)->get();
        return view('tampil-mahasiswa',['mahasiswas' => $result]);
    }
}
