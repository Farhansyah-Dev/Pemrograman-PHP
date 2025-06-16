<?php
// Null Coalescing Operator
// Operator ini digunakan untuk mengecek apakah sebuah variabel bernilai null atau tidak.
// Jika variabel tersebut null, maka akan mengembalikan nilai default yang telah ditentukan.
$value = [
    'key' => 'Hei'
];
$isset = $value['key'] ?? 'Nothing Found';
echo $isset . PHP_EOL;