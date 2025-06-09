<?php
//Membuat perulangan pada PHP

echo "Foor Loop Decrement\n";
for( $counter = 10; $counter >= 1 ; $counter-- ) {
    echo "Perulangan ForLoop ke-$counter" . PHP_EOL;
}

echo "Foor Loop Increment\n"; 
for ($counter = 1; $counter <= 10; $counter++): // Syntax Alternative Perulangan (di awali dengan : di akhiri dengan endfor;)
    echo "Perulangan FoorLoop ke-$counter" . PHP_EOL;
endfor;