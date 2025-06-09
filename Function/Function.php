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