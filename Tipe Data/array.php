<?php
// array adalah tipe data berisikan kosong atau banyak data
// array di PHP bisa berisikan data dengan jenis berbeda beda
// array memiliki kapasitas yang dinamis , artinya tidak perlu menentukan kapasitasnya sebelumnya

$values = array("Hallo,There", 2, 3.1, true, 5); // membuat array dengan tipe data integer
var_dump($values); // menampilkan isi array $values

// array kosong
$empety_array = []; // membuat array kosong
echo "isi data dari array: $empety_array\n"; // menampilkan pesan
$empety_array = 0; // mengisi array dengan nilai 0
$empety_array = 1; // mengisi array dengan nilai 1
echo "isi data dari array: $empety_array\n"; // menampilkan pesan
var_dump($empety_array); // menampilkan isi array $empety_array
?>