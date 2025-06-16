<!-- contoh Variable pada PHP -->
<?php
// Deklarasi variabel

$merk_laptop = "Huawei"; // variabel dengan nama $merk_laptop dan nilai "Huawei"
$harga_laptop = 9_000000; // variabel dengan nama $harga_laptop dan nilai 9.000.000
$ukuran_layar = 14.0; // variabel dengan nama $ukuran_layar dan nilai 14.0
$warna_laptop = "Silver"; // variabel dengan nama $warna_laptop dan nilai "Silver"

echo "Merk Laptop\t: $merk_laptop " . PHP_EOL;
echo "Harga Laptop Rp\t: $harga_laptop" . PHP_EOL;
echo "Ukuran Layar\t: $ukuran_layar " . PHP_EOL;
echo "Warna Laptop\t: $warna_laptop " . PHP_EOL;

var_dump($harga_laptop); // menampilkan tipe data dari variabel $harga_laptop