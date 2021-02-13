<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

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

//sacando
$contasCorrentes[4764238]['saldo'] -= 500;

// foreach ($contasCorrentes as $cpf => $testee) {
//     echo $testee['nome'] . ' ' . $testee['saldo'] . PHP_EOL;
// }

// exibeMensagem("Foi um prazer atendê-lo");
// exibeMensagem("Até a próxima!");

// echo "O titular da conta é {$contasCorrentes[1234123]['nome']}" . PHP_EOL;

//usando unset - deleta um item do arranjo
//note que podemos remover mais de uma variável de uma vez, da seguinte forma: unset($variavel1, $variavel2);
unset($contasCorrentes[4098564]);

//usando list
foreach ($contasCorrentes as $cpf => $testee) {
    ['nome' => $nome, 'saldo' => $saldo] = $testee;
    exibeMensagem("$cpf $nome $saldo");
}
