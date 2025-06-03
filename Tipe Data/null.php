<?php
// Tipe data Null
echo "Membuat Tipe data null\n";

$nama = null; //tipe data null
$tinggi = 165; //tipe data integer
$berat = null; //tipe data null

echo "Nama: $nama\n"; // memanggil variabel $nama yang bernilai null
echo "Tinggi: $tinggi cm\n"; // memanggil variabel $tinggi yang bernilai 165
echo "berat: $berat kg\n"; // memanggil variabel $berat yang bernilai null

var_dump($nama); // menampilkan tipe data dari variabel $nama
var_dump($tinggi); // menampilkan tipe data dari variabel $tinggi
var_dump($berat); // menampilkan tipe data dari variabel $berat

var_dump(is_null($nama)); // mengecek apakah variabel $nama bernilai null
var_dump(is_null($tinggi)); // mengecek apakah variabel $tinggi bernilai null
var_dump(is_null($berat)); // menggecek apakah variabel $berat bernilai null

// Menggunakan fungsi unset untuk menghapus variabel
$universitas = "Universitas Komputer Indonesia";
// unset 
unset($universitas); // menghapus variabel $universitas
echo "Universitas: $universitas\n"; // mencoba memanggil variabel $universitas yang sudah dihapus

//isset
echo "Apakah variabel universitas masih ada? ";
var_dump(isset($universitas)); // mengecek apakah variabel %universitas masih ada.

$jenis_kelamin = "laki-laki";
$jenis_kelamin = null; // mengubah nilai variabel $jenis_kelamin menjadi null   
//mengecek apakah variabel $jenis_kelamin masih ada
echo "apakah variabel jenis_kelamin masih ada? ";
var_dump(isset($jenis_kelamin));