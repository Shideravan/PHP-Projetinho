<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[4];

//em PHP, o colchete vazio vai ser equivalçente a $idadeList[count($idadeList)] = 33;
$idadeList[] = 33;

//echo $umaIdade;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
