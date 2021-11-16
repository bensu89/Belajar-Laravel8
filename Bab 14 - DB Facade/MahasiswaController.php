<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        return "Berhasil di proses";
    }

    public function insertSql(){
        $result = DB::insert("INSERT INTO mahasiswas(nim,nama,tanggal_lahir,ipk)
                  VALUES ('19003036','Sari Citra Lestari','2001-12-31',3.5)");

        dump($result);
    }

    public function insertTimestamp(){
        $result = DB::insert(
            "INSERT INTO mahasiswas
            (nim, nama, tanggal_lahir, ipk, created_at, updated_at)
            VALUES
            ('19002032','Rina Kumala Sari','2000-06-28',3.4,now(),now())"
        );
        dump($result);
   }

    public function insertPrepared(){
        $result = DB::insert(
            'INSERT INTO mahasiswas
            (nim, nama, tanggal_lahir, ipk, created_at, updated_at)
            VALUES (?,?,?,?,?,?)',
            ['18012012','James Situmorang','1999-04-02',2.7,now(),now()]
        );
        dump($result);
    }

    public function insertNamedBinding(){
        $result = DB::insert(
            'INSERT INTO mahasiswas
            (nim, nama, tanggal_lahir, ipk, created_at, updated_at)
            VALUES (:nim,:nama,:tgl,:ipk,:created,:updated)',
            [
                'nim' => '19005011',
                'nama' => 'Riana Putria',
                'tgl' => '2000-11-23',
                'ipk' => 2.7,
                'created' => now(),
                'updated' => now(),
            ]
        );
        dump($result);
    }

    public function update(){
        $result = DB::update(
            'UPDATE mahasiswas SET created_at = now(), updated_at = now()
            WHERE nim = ?', ['19003036']);
        dump($result);
    }

    public function delete(){
        $result = DB::delete(
            'DELETE FROM mahasiswas WHERE nama = ?', ['James Situmorang']
        );
        dump($result);
    }

    public function select(){
        $result = DB::select('SELECT * FROM mahasiswas');
        dump($result);
    }

    public function selectTampil(){
        $result = DB::select('SELECT * FROM mahasiswas');

        echo($result[0]->id). '<br>';
        echo($result[0]->nim). '<br>';
        echo($result[0]->nama). '<br>';
        echo($result[0]->tanggal_lahir). '<br>';
        echo($result[0]->ipk);
    }

    public function selectView(){
        $result = DB::select('SELECT * FROM mahasiswas');
        return view('tampil-mahasiswa',['mahasiswas' => $result]);
    }

    public function selectWhere(){
        $result = DB::select(
            'SELECT * FROM mahasiswas WHERE ipk > ? ORDER BY nama ASC ',[3]
        );
        return view('tampil-mahasiswa',['mahasiswas' =>$result]);
    }

    public function statement(){
        $result = DB::statement('TRUNCATE mahasiswas');
        return('Tabel mahasiswas sudah dikosongkan');
    }
}
