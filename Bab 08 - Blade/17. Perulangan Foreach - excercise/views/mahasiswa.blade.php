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
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @if (count($nilai)>0)
      @foreach ($nilai as $val)
        @if (($val >= 0) and ($val < 50))
          <div class="alert alert-danger d-inline-block"> 
            {{$val}}
          </div>
        @elseif (($val >= 50) and ($val <= 100))
          <div class="alert alert-success d-inline-block"> 
            {{$val}}
          </div>
        @endif
      @endforeach
    @else
      <div class="alert alert-dark d-inline-block"> 
        Tidak ada data...
      </div>
    @endif
  </div>
</body>
</html>
