<?php

for ($i = 1; $i <= 20; $i++) {
    if ($i == 10) {
        continue; //<-Fará pular apenas o 10 e o resto irá de boa
    } else if ($i == 16) {
        break; //<-vai TERMINAR o bloco FOR todo quando chegar no 16, ou seja, vai listar só até 15;
    }
    echo "#" . $i . PHP_EOL;
}
