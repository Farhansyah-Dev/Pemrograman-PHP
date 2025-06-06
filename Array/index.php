<?php
// PHP array
$cars = array("Volvo", "BMW", "Toyota"); //cara 1
$cars = ["Volvo", "BMW", "Toyota"]; //cara 2
$cars = [ //cara 3
    "Volvo",
    "BMW",
    "Toyota"
];


//Array dengan tipe data yg berbeda
$myArr = array("Volvo", 15, ["apples", "bananas"]);

// menghitung item array
echo count($cars);
echo "\n";

// Akses Indexed Array
echo $cars[0];

// Change Value
$cars[1] = "Ford";

//loop Through an Indexed Array
foreach ($cars as $car) {
    echo "$car \n";
}

// Index Number
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

// New Item
array_push($cars, "Honda");
var_dump($cars);

//but if you have an array with random index number, like this:
$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);

// PHP Associative Array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

// Akses Associative array
echo $car["model"];

// Change Value
$car["year"] = 2024;
var_dump($car);

// Looping Associative Array
foreach ($car as $x => $value) {
    echo "$x: $value \n";
}

// key value
$car = array (
    'brand' => 'Ford',
    'model' => 'Mustang',
    'year' => 1964
);
// add multiple items
array_push($car, 'color', 'red');
var_dump($car);

$empety = [];
$empety[0] = 'Volvo';
$empety[1] = 'BMW';
$empety[2] = 'Toyota';

// remove Array item
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);

// remove the last item
array_pop($cars);

// remove the first item
array_shift($cars);

// sort array
sort($cars); // sort ascending
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

// sort descending
rsort($cars);
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
ksort($age);
arsort($age);
krsort($age);

//PHP Multidimensional Array
$cars = array (
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Toyota", 5, 2),
    array("Honda", 17, 15)
);

echo $cars[0][0].": in stock: ".$cars[0][1].", sold: ".$cars[0][2]."\n";
echo $cars[0][1].": in stock: ".$cars[1][1].", sold: ".$cars[1][2]."\n";
echo $cars[2][0].": in stock: ".$cars[2][1].", sold: ".$cars[2][2]."\n";
echo $cars[3][0].": in stock: ".$cars[3][1].", sold: ".$cars[3][2]."\n";

for ($row = 0; $row < 4; $row++) {
    echo "row number $row: ";
    for ($col = 0; $col < 3; $col++) {
        echo $cars[$row][$col]." ";
    }}