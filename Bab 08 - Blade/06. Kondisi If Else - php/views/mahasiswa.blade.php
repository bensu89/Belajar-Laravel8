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
    <div class="alert alert-secondary d-inline-block">
      <?php
      if (($nilai >= 0) and ($nilai < 50)) 
      {
        echo "Maaf, anda tidak lulus";
      }
      else if (($nilai >= 50) and ($nilai <= 100)) 
      {
        echo "Selamat, anda lulus";
      }
      ?>
    </div>
  </div>
</body>
</html>
