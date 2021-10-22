<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar Mahasiswa</title>
  <link href="/css/my-style.css" rel="stylesheet">
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ol>
    <?php 
      foreach ($mahasiswa as $nama) {
        echo "<li> $nama </li>";
      }
    ?>
  </ol>

  <div>
    <img src="/img/people1.jpg">
    <img src="/img/people2.jpg">
    <img src="/img/people3.jpg">
    <img src="/img/people4.jpg">
  </div>

  <div>
    Copyright © <?php echo date("Y"); ?> Duniailkom
  </div>
<script src='/js/my-script.js'></script>
</body>
</html>
