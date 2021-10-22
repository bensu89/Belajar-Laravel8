<?php
  // buat koneksi dengan database mysql
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $link   = mysqli_connect($dbhost,$dbuser,$dbpass);

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

  //buat database kampusku jika belum ada
  $query = "CREATE DATABASE IF NOT EXISTS kampusku";
  $result = mysqli_query($link, $query);

  if(!$result){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  else {
    echo "Database <b>'kampusku'</b> berhasil dibuat... <br>";
  }

  //pilih database kampusku
  $result = mysqli_select_db($link, "kampusku");

  if(!$result){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  else {
    echo "Database <b>'kampusku'</b> berhasil dipilih... <br>";
  }

  // cek apakah tabel mahasiswa sudah ada. jika ada, hapus tabel
  $query = "DROP TABLE IF EXISTS mahasiswa";
  $hasil_query = mysqli_query($link, $query);

  if(!$hasil_query){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'mahasiswa'</b> berhasil dihapus... <br>";
  }

  // buat query untuk CREATE tabel mahasiswa
  $query  = "CREATE TABLE mahasiswa (nim CHAR(8), nama VARCHAR(100), ";
  $query .= "tempat_lahir VARCHAR(50), tanggal_lahir DATE, ";
  $query .= "fakultas VARCHAR(50), jurusan VARCHAR(50), ";
  $query .= "ipk DECIMAL(3,2), PRIMARY KEY (nim))";

  $hasil_query = mysqli_query($link, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'mahasiswa'</b> berhasil dibuat... <br>";
  }

  // buat query untuk INSERT data ke tabel mahasiswa
  $query  = "INSERT INTO mahasiswa VALUES ";
  $query .= "('14005011', 'Riana Putria', 'Padang', '1996-11-23', ";
  $query .= "'FMIPA', 'Kimia', 3.1), ";
  $query .= "('15021044', 'Rudi Permana', 'Bandung', '1994-08-22', ";
  $query .= "'FASILKOM', 'Ilmu Komputer', 2.9), ";
  $query .= "('15003036', 'Sari Citra Lestari', 'Jakarta', '1997-12-31', ";
  $query .= "'Ekonomi', 'Manajemen', 3.5), ";
  $query .= "('15002032', 'Rina Kumala Sari', 'Jakarta', '1997-06-28', ";
  $query .= "'Ekonomi', 'Akuntansi', 3.4), ";
  $query .= "('13012012', 'James Situmorang', 'Medan', '1995-04-02', ";
  $query .= "'Kedokteran','Kedokteran Gigi', 2.7)";

  $hasil_query = mysqli_query($link, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  else {
    echo "Tabel <b>'mahasiswa'</b> berhasil diisi... <br>";
  }

  // tutup koneksi dengan database mysql
  mysqli_close($link);
?>
