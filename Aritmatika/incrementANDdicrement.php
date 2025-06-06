<?php 
// increment dan decrement
// increment adalah penambahan nilai variabel sebesar 1
$contoh1 = 10; //inisialisasi variabel contoh1 dengan nilai 10
$preIncrement = ++$contoh1; // pre-increment contoh1 (menambahkan 1 sebelum menampilkan nilai)
// $postIncrement = $contoh1++; // post-increment contoh1 (menambahkan 1 setelah menampilkan nilai)

var_dump($contoh1); // menampilkan nilai contoh1 setelah pre-increment
var_dump($preIncrement); // menampilkan nilai variabelbaru setelah pre-increment

//note: pre (sebelum) increment akan menambahkan nilai sebelum menampilkan nilai variabel, sedangkan post (setelah) increment akan menambahkan nilai setelah menampilkan nilai variabel
?>