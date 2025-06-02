<?php

echo "Tipe Daata PHP\n";
// Tipe data integer

echo "Tipe data integer";
echo "Decimal: ";
var_dump(1234); // tipe data integer dengan notasi desimal

echo "Oktal :";
var_dump(0123); // tipe data integer dengan notasi Oktal

echo "Hexadecimal :";
var_dump(0x1A); // tipe data integer dengan notasi HexaDecimal

echo "Binary :";
var_dump(0b11111111); // tipe data integer dengan notasi Binary

echo "Underscore di number :";
var_dump(8_45000000);

// Tipe data Float
echo "Tipe data Float: ";
var_dump(1.234); // tipe data float dengan notasi desimal

echo "Float dengan e notation: (sama dengan 1.2 * 10^3)";
var_dump(1.2e3); // tipe data float dengan notasi e notation

echo "Float dengan e notasion negatif: (sama dengan 1.2 / 10^3)";
var_dump(1.2e-3); // tipe data float dengan notasi e notation negatif

echo 'Float dengan underscore: ';
var_dump(1_234.567); // tipe data float dengan underscore

// Integer overflow
echo "Integer overflow: ";
var_dump(9223372036854775807 + 1); // overflow pada integer 64 bit

// Tipe data Boolean
echo "Tipe data Boolean True: ";
var_dump(true); // tipe data boolean dengan nilai true

echo "Tipe data Boolean False: ";
var_dump(false); // Tipe data boolean dengan nilai false

// Tipe data String
echo "Tipe data String (tanda petik 1): \n";
var_dump('Hello, There!'); 
$nama = 'Muhammad Farhan Wirdiansyah';  // tipe data string dengan tanda petik satu
echo 'Nama: ', $nama . "\n";

echo "Tipe data String (tanda petik 2): \n";
echo "Nama: ";
echo "Muhammad Farhan Wirdiansyah\n"; // tipe data string dengan tanda petik dua

// String multi line
echo <<<Han
String multi line pada PhP
saya sedang belajar PhP
Saya sangat senang belajar PhP
menggunakan heredoc (<<<) syntax
Han;
echo "\n";

echo <<<'Han'
String multi line pada PhP
saya sedang belajar PhP
Saya sangat senang belajar PhP
menggunakan heredoc (<<<) syntax
Han;
echo "\n";
// echo phpversion();
