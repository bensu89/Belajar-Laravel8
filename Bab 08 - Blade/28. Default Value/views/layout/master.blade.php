<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>@yield('title','Sistem Informasi Mahasiswa')</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link @yield('menuMahasiswa')" href="/mahasiswa">
        Data Mahasiswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link @yield('menuDosen')" href="/dosen">Data Dosen</a>
    </li>
    <li class="nav-item">
    <a class="nav-link @yield('menuGallery')" href="/gallery">Gallery</a>
    </li>
  </ul>
</nav>

@yield('content')

<footer class="bg-dark py-4 text-white mt-4">
<div class="container">
  Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} Duniailkom
</div>
</footer>

</body>
</html>
