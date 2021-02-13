<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[4];

//em PHP, o colchete vazio vai ser equivalçente a $idadeList[count($idadeList)] = 33;
$idadeList[] = 33;

//echo $umaIdade;

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
echo $idadeVinicius, $idadeJoao, $idadeMaria;
// foreach ($idadeList as $idade) {
//     echo $idade . PHP_EOL;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Corrnetes</h1>
    <d1>
        <dt>
</body>
</html>