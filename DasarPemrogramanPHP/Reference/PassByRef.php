<?php
function increment (int &$value) {
    $value++;
}

$counter = 1;
increment ($counter);
echo "Increment Value: $counter".PHP_EOL;
