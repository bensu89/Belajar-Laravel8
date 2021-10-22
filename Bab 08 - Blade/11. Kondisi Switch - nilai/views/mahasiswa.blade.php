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
  <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
    <br>
    @switch($nilai)
      @case(0)
        <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
      @break
      @case(75)
        <div class="alert alert-success d-inline-block">Lumayan</div>
      @break
      @case(100)
        <div class="alert alert-success d-inline-block">Sempurna</div>
      @break
      @default
        <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
    @endswitch
  </div>
</body>
</html>
