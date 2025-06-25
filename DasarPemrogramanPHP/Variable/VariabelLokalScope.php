<?php

function showName () {
    GLOBAL $name;
    $name = 'Farhan'; // Variabel Lokal
}

showName(); // Tidak ada output karena variabel $name tidak dapat diakses di luar fungsi
echo $name.PHP_EOL; // Akan menghasilkan error karena $name tidak didefinisikan di sini

var_dump ($GLOBALS);