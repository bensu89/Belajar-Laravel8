<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Data Dosen</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/dosen">Data Dosen</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="/gallery">Gallery</a>
    </li>
  </ul>
</nav>

<div class="container text-center mt-3 p-4 bg-white">
  <h1>Gallery</h1>
  <div class="row">
    <div class="col-4">
      <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4">
      <img src="https://source.unsplash.com/kfwPJieZVwI/350x250"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4">
      <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4 mt-4">
      <img src="https://source.unsplash.com/JdzHrfX4l4Q/350x250"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4 mt-4">
      <img src="https://source.unsplash.com/T-tVt4xsCdE/350x250"
      class="img-thumbnail img-fluid">
    </div>
    <div class="col-4 mt-4">
      <img src="https://source.unsplash.com/F8t2VGnI47I/350x250"
      class="img-thumbnail img-fluid">
    </div>
  </div>
</div>

<footer class="bg-dark py-4 text-white mt-4">
<div class="container">
  Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} Duniailkom
</div>
</footer>

</body>
</html>
