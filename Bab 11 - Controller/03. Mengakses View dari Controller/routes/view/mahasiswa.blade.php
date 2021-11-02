<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <title>Data Mahasiswa</title>
</head>
<body>
  <div class="container text-center p-4 bg-white">
    <h1>Data Mahasiswa</h1>
    <div class="row">
      <div class="col-sm-8 col-md-6 m-auto">
        <ol class="list-group">
        @forelse ($mahasiswa as $val)
          <li class="list-group-item">{{$val}}</li>
        @empty
          <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
        @endforelse
        </ol>
      </div>
    </div>
  </div>
</body>
</html>
