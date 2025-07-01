<?php

function  cvrtOctalToDecml (int $number) { // Konveri Oktal ke Decimal
    
    if ($number <= 0 and $number > 7) {
        return null;
        
    }else {
        return octdec($number);
    }
} 
$result =  cvrtOctalToDecml (145);
echo "Hasil konversi oktak to decimal: $result".PHP_EOL; 

function ConvertDecimalToBin (int $number) { //Konversi Decimal ke Binary
    return decbin ($number);
}

$result = ConvertDecimalToBin (88);
echo "Hasil konversi decimal to binary: $result".PHP_EOL;

function convertHxtoDec (string $number) { //Konversi Hexadecimal ke Decimal
    return hexdec($number);
}
$result = convertHxtoDec ('1AF');
echo "Hasil konversi HEX to DEC: $result".PHP_EOL;

function convert (string $number):string|false{
    return hex2bin($number);
}
$result = convert ("1AF");
echo "Hasil konversi HEX to BIN: $result".PHP_EOL;

