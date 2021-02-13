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
