<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jurusan.index',['jurusans' => Jurusan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_jurusan'           => 'required',
            'nama_dekan'          => 'required',
            'jumlah_mahasiswa' => 'required|min:10|integer',
        ]);

        Jurusan::create($validateData);
        return redirect('/')->with('pesan',"Jurusan $request->nama_jurusan
                                    berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        return view('jurusan.show',compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurusan $jurusan)
    {
        return view('jurusan.edit',compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $validateData = $request->validate([
            'nama_jurusan'           => 'required',
            'nama_dekan'          => 'required',
            'jumlah_mahasiswa' => 'required|min:10|integer',
        ]);

        $jurusan->update($validateData);

        return redirect('/jurusans/'.$jurusan->id)
        ->with('pesan',"Jurusan $jurusan->nama_jurusan berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();
        return redirect('/')
        ->with('pesan',"Jurusan $jurusan->nama_jurusan berhasil dihapus");
    }
}


