<!-- (Opcional) Experimente a declaração de um array associativo 
que mapea a placa do carro (tipo string, por exemplo LMS-2312) 
para um carro. O carro também é um array associativo que possui 
uma marca (por exemplo 'marca' => 'VW') e o 
modelo (por exemplo 'modelo' => 'Golf'). -->

<?php

$carro1 = [
    'placa' => 'LMS-2312',
    'marca' => 'VW',
    'modelo' => 'Golf'

];

echo $carro1['placa'];

//outra implementação
echo PHP_EOL;
echo PHP_EOL;

$carros = [
    'LMS-2232' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'KLM-1324' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],
];

foreach ($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . PHP_EOL;
}
