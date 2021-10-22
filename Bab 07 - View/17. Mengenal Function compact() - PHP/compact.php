<?php
$mahasiswa01 = "Risa Lestari";
$mahasiswa02 = "Rudi Hermawan";
$mahasiswa03 = "Bambang Kusumo";
$mahasiswa04 = "Lisa Permata";

$arr = compact("mahasiswa01", "mahasiswa02", "mahasiswa03", "mahasiswa04");

echo $arr["mahasiswa01"]; // Risa Lestari 
echo $arr["mahasiswa02"]; // Rudi Hermawan 
echo $arr["mahasiswa03"]; // Bambang Kusumo 
echo $arr["mahasiswa04"]; // Lisa Permata