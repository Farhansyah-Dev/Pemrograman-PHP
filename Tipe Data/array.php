<?php
// array adalah tipe data berisikan kosong atau banyak data
// array di PHP bisa berisikan data dengan jenis berbeda beda
// array memiliki kapasitas yang dinamis , artinya tidak perlu menentukan kapasitasnya sebelumnya

$values = array(1, 2, 3, 4, 5); // membuat array dengan tipe data integer
var_dump($values); // menampilkan isi array $values

$nama_siswa = array ("Adi", "Bandrio", "Cantika", "Doni", "Erlangga"); // membuat tipe data array string
var_dump($nama_siswa[0]); // menampilkan isi array $nama_siswa indeks ke 0
$nama_siswa[0] = "Andika"; // mengubah isi array indeks ke-0
var_dump($nama_siswa);

unset($nama_siswa[4]); // menghapus isi array indeks ke-4
var_dump($nama_siswa); // menampilkan isi array $nama_siswa

$nama_siswa[] = "Erlan"; // menambahkan data baru ke dalam array
var_dump($nama_siswa); // menampilkan isi array $nama_siswa

count($nama_siswa); // menghitung jumlah data dalam array $nama_siswa
echo "Jumlah data dalam array nama_siswa: " . count($nama_siswa) . "\n"; // menampilkan jumlah data
var_dump($nama_siswa); // menampilkan isi array $nama_siswa

// array kosong
$empety_array = []; // membuat array kosong
echo "isi data dari array: $empety_array\n"; // menampilkan pesan
$empety_array = 0; // mengisi array dengan nilai 0
$empety_array = 1; // mengisi array dengan nilai 1
echo "isi data dari array: $empety_array\n"; // menampilkan pesan
var_dump($empety_array); // menampilkan isi array $empety_array

// array sebagai map
$tas = array (
    "pemelik" => "Farhan",
    "ukuran" => "medium",
    "warna" => "Hitam",
    "harga" => 45000,
);
var_dump($tas); // menampilkan isi array $tas
$tas["ukuran"] = "Large"; //mengubah ukuran tas
echo 'Ukuran tas:', $tas["ukuran"], "\n"; // menampilkan ukuran tas

$lemariBaju = [
    "rak1" => "Baju",
    "rak2" => "Celana",
    "rak3"  => "Celana Dalam",
    "rak4" => "Kaos Dalam"
];
var_dump($lemariBaju); // menampilkan isi array $lemariBaju
$lemariBaju["rak1"] = "Baju kerja"; // mengubah isi rak1
echo 'isi rak1: ', $lemariBaju["rak1"] . "\n";//menampilkan isi rak1
echo "data lemari baju: \n";
foreach (array_values($lemariBaju)as $nilai) { 
    echo $nilai, "\n"; // menampilkan semua nilai dari array $lemariBaju
}
// array multidimensi
$biodata = array (
    "nama" => "Muhammad Farhan Wirdiansyah",
    "umur" => 18,
    "jenis_kelamin" => "laki-laki",
    "alamat" => array(
        "kp" => "Cisalak",
        "kel" => "Sumur Batu",
        "kec" => "Bantar Gebang",
        "kota" => "Bekasi"
    )
    );

var_dump($biodata["alamat"]["kota"]);

$bekasi = [
    'stasiun' => 'Stasius Bekasi',
    'terminal' => 'Terminal Bekasi',
    'kantor_pemerintahan' => [
        'walikota' => 'Kantor Walikota Bekasi',
        'dinas_pendidikan' => 'Dinas Pendidikan Kota Bekasi'
    ]
    ];
$bekasi ['kantor_pemerintahan']['dinas_pendidikan'] = 'Dispendik kota bekasi';

var_dump($bekasi);

?>