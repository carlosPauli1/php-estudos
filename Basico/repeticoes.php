<?php

// FOR E WHILE

$contador = 1;

// While

while ($contador <= 15) {
    echo "#$contador" .PHP_EOL;
    $contador++;
}

// FOR
for ($i = 0; $i < 10; $i++) {
    echo "". $contador ."". PHP_EOL;
}

// Break and Continue
for ($i = 0; $i < 10; $i++) {
    if ($contador == 12) {
        continue;
    }
    
    echo "". $contador ."". PHP_EOL;
}