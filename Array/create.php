<?php
//create array
$cars = array ('Volvo', 'BMW', 'Toyota'); // array string

$myArr = array ('Volvo', 15, ['apples', 'bananas']);
var_dump($myArr); // menampilkan isi array $myArr

echo count($cars);

// acces indexed array
echo $cars[0]; // menampilkan isi array $cars index ke 0
// change value
$cars[0] = 'Ford';
var_dump($cars);
// Looping array
$cars = array('Volvo', 'BMW', 'Toyota');
foreach ($cars as $car){
    echo "$car <br>\n";
}

// Index Number 
$cars[0] = 'Volvo';
$cars[1] = 'BMW';
$cars[2] = 'Toyota';

// menambahkan item baru ke array
array_push($cars, 'Honda');
var_dump($cars);
