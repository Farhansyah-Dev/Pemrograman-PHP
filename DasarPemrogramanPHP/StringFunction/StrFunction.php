<?php
var_dump (join(" ", [1, 2, 3, 4, 5]));
var_dump (explode(' ', 'Muhammad Farhan'));
var_dump (strtolower('MUHAMMAD FARHAN'));
var_dump (strtoupper('muhammad farhan'));
var_dump (trim('    muhammad     '));
var_dump (substr('Muhammad Farhan', 0, 6));
var_dump (addcslashes('Farhan[,]', "a..z"));  //Menambahkan Garis Miring Terbalik dari a sampai z
var_dump (addslashes("Muhammad'Farhan'Wirdiansyah")); //Menambahkan Garis Miring Terbalik pada String yang mengandung Simbol
var_dump (bin2hex("Hello World")); //Mengubah String menjadi Hexadecimal
var_dump (hex2bin("48656c6c6f20576f726c64")); //Mengubah Hexadecimal menjadi String
var_dump (chop("Huawei", "i")); //Menghilangkan Karakter sesuai dengan apa yg kita mau
var_dump (rtrim("Indonesia...","."));
var_dump (ltrim("   Indonesia   ")); //Menghilangkan Karakter dari Kiri
var_dump (trim(" Bahaya  "));   //Menghilangkan Karakter awal dan akhir
var_dump (chr(100)); // Mengubah Angka menjadi Karakter
var_dump (chunk_split("HuaweiD14", 6, " ")); // Mengubah String menjadi String yang terpisah dengan spasi
VAR_DUMP (chr("856"));


