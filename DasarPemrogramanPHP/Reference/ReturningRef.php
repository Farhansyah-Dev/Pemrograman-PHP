<?php
function &getValue () {
    static $value = 1;
    return $value;
}

$a = &getValue();
$a = 10;

$b = &getValue();
echo "Value: $b".PHP_EOL;

