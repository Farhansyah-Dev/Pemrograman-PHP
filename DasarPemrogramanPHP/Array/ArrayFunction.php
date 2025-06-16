<?php

$dataArray = [1, 2, 3, 4, 5];

$mapFunction = fn (int $value) => $value * 10;

$dataResult = array_map(fn(int $value) => $value * 2, $dataArray); //Penggunaan aray_map
echo "Hasil: $dataResult";
var_dump ($dataResult);

rsort($dataArray);
var_dump ($dataArray);

sort($dataArray);
var_dump ($dataArray);

$namaDosen = [
    "pkn" => "Karsono",
    "mtk" => "Mulyono"
];
var_dump (array_keys ($namaDosen));
var_dump (array_values ($namaDosen));
