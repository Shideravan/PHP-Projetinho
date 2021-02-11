<?php

$idade = 111;
$nome = "oi";
echo "Você só pode entrar se tiver mais do que 18 anos ";
echo "ou a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade > 18 && $nome == "oi") {
    echo "Você tem $idade anos. Pode entrar";
} else {
    echo "Você não pode entrar. Menor de idade...";
}

if ($idade > 18 or $idade == 18) {
    echo "Você tem $idade anos. Pode entrar";
} else {
    echo "Você não pode entrar. Menor de idade...";
}

//usando operador ternário
$idade = 15;
$mensagem = $idade < 18 ? ‘Você é menor de idade’ : ‘Você é maior de idade’;
echo $mensagem;