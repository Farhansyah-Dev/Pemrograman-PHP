<?php
//Annonymous Function
$jeniskucing = "Persia";

$anonimusFunction = function () use ($jeniskucing): string {
    return "Jenis Kucing $jeniskucing ". PHP_EOL;
};
echo $anonimusFunction();

//Arrow Function
$arrowFunction = fn() => "Jenis Kucing $jeniskucing" . PHP_EOL ;
echo $arrowFunction();
