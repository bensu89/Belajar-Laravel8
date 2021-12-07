<?php
  // tampilkan semua pesan error
  // dump($errors);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Form Registrasi</title>
</head>
<body>

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Pendaftaran Mahasiswa</h1>
      <hr>

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{url('/proses-form')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim">
        </div>

        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin"
              id="laki_laki" value="L">
              <label class="form-check-label" for="laki_laki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin"
              id="perempuan" value="P">
              <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select class="form-control" name="jurusan" id="jurusan">
           <option value="Teknik Informatika">Teknik Informatika</option>
           <option value="Sistem Informasi">Sistem Informasi</option>
           <option value="Ilmu Komputer">Ilmu Komputer</option>
           <option value="Teknik Komputer">Teknik Komputer</option>
           <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
          </select>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" id="alamat" rows="3"
          name="alamat"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Daftar</button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
