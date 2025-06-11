<?php

// Tanpa Argument
function SayHello() {
    echo "Hei, There This Is Function" . PHP_EOL;
}
SayHello();

// Dengan Argument
function CallName($name) {
    echo "Good morning $name" . PHP_EOL;
}
CallName('Ardiansyah');
CallName('Farhan Mubarok');

// Default Argument
function NameArgument ($name, $age = 30) {
    echo "Hi, There My Name: $name" . PHP_EOL;
    echo "My Age: $age" . PHP_EOL;
}
NameArgument('Riski');
NameArgument('Dandi', 21);

// Argument Tipe data
function sum(int $a, int $b) {
    $total = $a + $b ;
    echo "Total = $a + $b = $total" . PHP_EOL;
}
sum('100','100');
sum(100, 100);
sum(true, true);

// Length Argument List
function sumAll (...$number) {
    $total = 0;
    foreach ($number as $numbers) {
        $total += $numbers;
    }
    echo "Total " . implode(" + ", $number) . " = $total" . PHP_EOL;
}
$number = [1, 2, 3, 4, 5];
sumAll(1, 2, 3, 4, 5);
sumAll(...$number);

//Return Value1
function kalkulator(int $first, int $seccond): int {
    $total = $first + $seccond;
    return $total;
}
$result = kalkulator(12, 3);
var_dump($result);

// Return Value2
function getValue(int $value) : string {
    if($value >= 80){
        return "A";
    }
    elseif ($value >= 70 ) {
        return "B";
    }
    elseif ($value >= 60 ) {
        return "C";
    }
    elseif ($value >= 50 ) {
        return "D";
    }
    else {
        return "E";
    }
}

$result = getValue(90);
var_dump($result);
$result = getValue(65);
var_dump($result);
$result = getValue(20);
var_dump($result);

//Variable Function
function foo (){
    echo "Foo" . PHP_EOL;
}
function bar() {
    echo "Bar" . PHP_EOL;
}
$memanggilFunction = "foo";
$memanggilFunction();

$panggilFunction = "bar";
$panggilFunction();

//return Variabel Function
function say($name, $filter){
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}

function sampleFunction (string $name): string {
    return "Sample $name";
}

say("eko", "sampleFunction");
say("han", "strtoupper");
say("HAN", "strtolower");