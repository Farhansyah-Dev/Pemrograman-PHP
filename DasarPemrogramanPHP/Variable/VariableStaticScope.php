<?php
function increment () {
    $counter = 0; 
    echo "Counter: $counter".PHP_EOL;
    $counter++;
}
increment(); // Counter: 0
increment(); // Counter: 0  
// Variabel $counter tidak menyimpan nilai dari pemanggilan sebelumnya

function incrementStatic () {
    static $counter = 0;
    echo "Counter: $counter".PHP_EOL;
    $counter++;
}
incrementStatic();
incrementStatic(); 
incrementStatic();