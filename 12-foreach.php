<?php

//Arranjos associativos
$conta1 = [
    'nome' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'nome' => 'Maria',
    'saldo' => 10000
];
$conta3 = [
    'nome' => 'Alberto',
    'saldo' => 300
];

//gerando o arranjo de contas, associando com números aleatórios, só por exemplo (que estou chamando de CPF)
//ao invés de chamar cada variável conta, eu poderia também colocar o valor direto
$contasCorrentes = [
    1234123 => $conta1,
    4764238 => $conta2,
    4098564 => $conta3
];

//exemplo de um foreach, perceba que o testee foi escolhido só com o intuito de mostrar que funcionaria com qualquer nome
foreach ($contasCorrentes as $cpf => $testee) {
    echo $testee['nome'] . PHP_EOL;
}
