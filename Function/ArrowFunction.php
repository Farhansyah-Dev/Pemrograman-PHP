<?php
//Annonymous Function
$jeniskucing = "Persia";
$warna = "Orange";

$KucingSaya = function () use ($jeniskucing, $warna) {
    echo "Jenis Kucing: $jeniskucing" . PHP_EOL;
    echo "Warna Kucing: $warna" . PHP_EOL;
};
$KucingSaya();

//Arrow Function
$KucingSaya = fn () => "Jenis Kucing $jeniskucing" . "Warna Kucing: $warna" .PHP_EOL;