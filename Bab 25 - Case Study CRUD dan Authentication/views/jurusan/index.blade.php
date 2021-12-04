@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">
      <div class="col-12">

        <div class="py-4 d-flex justify-content-end align-items-center">
          <h1 class="h2 mr-auto">Tabel Jurusan</h1>
          <a href="{{url('/jurusans/create')}}" class="btn btn-primary">
            Tambah Jurusan
          </a>
        </div>

        @if(session()->has('pesan'))
        <div class="alert alert-success" role="alert">
          {{ session()->get('pesan')}}
        </div>
        @endif

      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Jurusan</th>
            <th>Nama Dekan</th>
            <th>Jumlah Mahasiswa</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($jurusans as $jurusan)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td>
                <a href="{{ url('/jurusans/'.$jurusan->id) }}">
                  {{$jurusan->nama_jurusan}}
                </a>
            </td>
            <td>{{$jurusan->nama_dekan}}</td>
            <td>{{$jurusan->jumlah_mahasiswa}}</td>
          </tr>
          @empty
            <td colspan="6" class="text-center">Tidak ada data...</td>
          @endforelse
        </tbody>
      </table>
      </div>
    </div>
</div>
@endsection
