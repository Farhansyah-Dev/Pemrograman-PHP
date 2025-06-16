<?php

$counter = 1;

while (true) {
    echo "Perulangan ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter >  10):
        break;
    endif;
}

for ($counter = 1; $counter <= 20; $counter++) {
    if($counter % 2 == 0) {
        continue;
    }
    echo "Perulangan ke-$counter" . PHP_EOL;
}
