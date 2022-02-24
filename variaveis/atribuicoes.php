<?php

$numero = 2;
echo $numero;

$numero++;
echo "<br/>" . $numero; //3

$numero = $numero + 1;
echo "<br/> $numero"; //4

$numero += 1;
echo "<br/>" . $numero; //5
echo "<br/>";
/****/

$variavelExistente = "valor existente";
echo "<br>" . $variavelExistente;

$valor = $variavelExistente ?? "valor default";

echo "<br>" . $valor;
