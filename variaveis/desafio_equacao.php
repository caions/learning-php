<?php

$numerador1 = (6 * (3 + 2)) ** 2;
$denominador1 = 3 * 2;

$numerador2 = (1 - 5) * (2 - 7);
$denominador2 = 2;

$fracao1 = $numerador1 / $denominador1;
$fracao2 = ($numerador2 / $denominador2) ** 2;

$numeradorGeral = ($fracao1 - $fracao2) ** 3;
$denominadorGeral = 10 ** 3;

$resultado = $numeradorGeral / $denominadorGeral;

echo "O resultado final é: ". $resultado;
