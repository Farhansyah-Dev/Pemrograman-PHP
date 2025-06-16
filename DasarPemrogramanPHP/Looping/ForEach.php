<?php

//perulangan array tanpa ForEach

$nama = ['Muhammad', 'Farhan', 'Wirdiansyah'];

for ($i = 0; $i < count($nama); $i++) {
    echo "data ke-$i = $nama[$i] " . PHP_EOL;
}

//perulangan Array menggunakan ForEach
$nama = ['Muhammad', 'Farhan', 'Wirdiansyah'];
foreach ($nama as $index => $name) {
    echo "data ke-$index = $name " . PHP_EOL;
}

//perulangan array map dengan foreach
$person = [
    'first_nama' => 'Muhammad',
    'middle_nama' => 'Farhan',
    'last_nama' => 'Wirdiansyah'
];
foreach ($person as $key => $value) {
    echo "data $key = $value " . PHP_EOL;
}