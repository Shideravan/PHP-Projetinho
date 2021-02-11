<?php

echo "Tabuada!" . PHP_EOL;

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        echo "$i X $j = " . ($i * $j) . PHP_EOL;
    }
    echo "\n";
}
