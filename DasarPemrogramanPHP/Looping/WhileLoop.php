<?php
// While Loop PHP
$counter = 1;

echo 'While Loop Increment' . PHP_EOL;
while($counter <= 10) {
    echo 'Hitungan ke-',$counter . PHP_EOL;
    $counter++;
}

$hitung = 10;

echo 'While Loop Decrement' . PHP_EOL; //Syntax Alternative untuk While Loop (Di awali : diakhiri Endwhile;)
while ($hitung >= 1):
    echo "Hitung Mundur ke-$hitung" . PHP_EOL;
    $hitung--;
endwhile;