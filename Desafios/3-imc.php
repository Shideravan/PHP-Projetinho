<?php

$peso = 90;
$altura = 1.80;
$imc = $peso / ($altura ** 2);

echo "O seu IMC é de ";
echo number_format($imc, 2, ',', '');
echo ". Esse IMC está ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";
