<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('/css/bootstrap.min.css')}} " rel="stylesheet">
  <title>Data Mahasiswa</title>
</head>
<body>

<div class="container text-center p-4">
  <h1>Data Mahasiswa</h1>
  <div class="row">
    <div class="m-auto">
      <ol class="list-group">
        @forelse ($mahasiswas as $mahasiswa)
          <li class="list-group-item">
            {{$mahasiswa->nama}} ( {{$mahasiswa->nim}} ),
            Tanggal Lahir: {{$mahasiswa->tanggal_lahir}},
            IPK: {{$mahasiswa->ipk}}
          </li>
        @empty
          <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
        @endforelse
      </ol>
    </div>
  </div>
</div>

</body>
</html>
