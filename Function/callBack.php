<?php

function callBack (string $universitas, callable $filter) {
    $hasil = call_user_func($filter, $universitas); //ini sama saja seperti $hasil = $filter($universitas);
    echo "Universitas $hasil" .PHP_EOL;
}

callBack("Pelita Bangsa", "strtoupper"); //Callback dengan cara biasa
callBack("Pelita Bangsa", "strtolower"); //Callback dengan cara biasa
callBack ("Pelita Bangsa", function(string $universitas):string { //CallBack Annonymous function
    return strtoupper($universitas);
});
callBack("Pelita Bangsa", fn($uinversitas) => strtolower($uinversitas) ); // CallBack Arrow Function