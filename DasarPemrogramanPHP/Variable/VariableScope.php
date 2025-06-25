<?php

$name = 'Farhan'; //Variabel Global

function showName () {  //Variable yang di dalam function adalah variable lokal
    global $name;
    echo 'hei ' .$name .PHP_EOL;
}
showName(); // hei Farhan