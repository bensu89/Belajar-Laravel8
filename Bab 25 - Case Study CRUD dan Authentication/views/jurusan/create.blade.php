@extends('layouts.app')

@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-sm-8 col-md-6">
      <h1 class="h2 pt-4">Pendaftaran Jurusan</h1>
      <hr>

      <form action="{{url('/jurusans')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama_jurusan">Nama Jurusan</label>
          <input type="text"
          class="form-control @error('nama_jurusan') is-invalid @enderror"
          id="nama_jurusan" name="nama_jurusan"
          value="{{ old('nama_jurusan') }}">
          @error('nama_jurusan')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="nama_dekan">Nama Dekan</label>
          <input type="text"
          class="form-control @error('nama_dekan') is-invalid @enderror"
          id="nama_dekan" name="nama_dekan" value="{{ old('nama_dekan') }}">
          @error('nama_dekan')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="jumlah_mahasiswa">Jumlah Mahasiswa</label>
          <input type="text"
          class="form-control @error('jumlah_mahasiswa') is-invalid @enderror"
          id="jumlah_mahasiswa" name="jumlah_mahasiswa"
          value="{{ old('jumlah_mahasiswa') }}">
          @error('jumlah_mahasiswa')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary my-2">Daftar</button>
      </form>

    </div>
  </div>
</div>

@endsection
