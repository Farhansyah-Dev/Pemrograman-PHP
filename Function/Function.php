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

