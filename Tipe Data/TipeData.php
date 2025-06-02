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

echo phpversion();
