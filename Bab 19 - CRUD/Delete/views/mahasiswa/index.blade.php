<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Data Mahasiswa</title>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="py-4 d-flex justify-content-end align-items-center">
      <h2 class="mr-auto">Tabel Mahasiswa</h2>
      <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">
        Tambah Mahasiswa
      </a>
    </div>

    @if(session()->has('pesan'))
    <div class="alert alert-success">
      {{ session()->get('pesan')}}
    </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nim</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Jurusan</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($mahasiswas as $mahasiswa)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td><a href="{{ route('mahasiswas.show',['mahasiswa' => $mahasiswa->id]) }}">{{$mahasiswa->nim}}</a></td>
          <td>{{$mahasiswa->nama}}</td>
          <td>{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
          <td>{{$mahasiswa->jurusan}}</td>
          <td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
        </tr>
        @empty
          <td colspan="6" class="text-center">Tidak ada data...</td>
        @endforelse
      </tbody>
    </table>
    </div>
  </div>
</div>

</body>
</html>
