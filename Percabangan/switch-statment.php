<?php
// switch statement
$nilai = "G";

if ($nilai == "A") {
    echo "Anda Lulus dengan sangat baik" . PHP_EOL;
}else if ($nilai == "B" || $nilai == "C") {
    echo "Anda Lusus" . PHP_EOL;
}else if ($nilai == "D") {
    echo "Anda tidak Lulus" . PHP_EOL;
}else {
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}

switch ($nilai) {
    case "A":
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D";
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
    echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
        break;
}