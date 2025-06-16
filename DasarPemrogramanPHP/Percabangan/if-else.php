<?php
// if stantement
// if else statement
// else if statement

$absen = 70;
$nilai = 80;

// if else statement
if ($absen >= 80 && $nilai >= 80) {
    echo "Selamat! Anda Lulus";
} else {
    echo "Maaf! Anda Tidak Lulus";
}

// if else if statement
if ($absen >= 80 && $nilai >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
}else if ($absen >= 70 && $nilai >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
}else if ($absen >= 60 && $nilai >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
}else if ($absen >= 50 && $nilai >= 50) {
    echo "Nilai Anda D " . PHP_EOL;
}else {
    echo "Nilai Anda E" . PHP_EOL;
}
    