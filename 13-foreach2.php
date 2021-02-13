<?php

$contasCorrentes = [
    1234123 => [
        'nome' => 'Vinicius',
        'saldo' => 1000
    ],
    4764238 => [
        'nome' => 'Maria',
        'saldo' => 10000
    ],
    4098564 => [
        'nome' => 'Alberto',
        'saldo' => 300
    ]
];

//Se deixar o índice em branco, ele coloca +1 após o maior índice para ser o índice da nova cópia
$contasCorrentes[9848257] = [
    'nome' => 'Claudia',
    'saldo' => 2000
];

//exemplo de um foreach, perceba que o testee foi escolhido só com o intuito de mostrar que funcionaria com qualquer nome
foreach ($contasCorrentes as $cpf => $testee) {
    echo $testee['nome'] . PHP_EOL;
}
