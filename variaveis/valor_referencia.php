<?php

$variavel = "valor inicial";
echo $variavel;

// atribuição por valor
$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = "novo valor";
echo "<br> $variavel";
echo "<br> $variavelValor";

// atribuição por referencia
$variavelReferencia = &$variavel;
echo "<br> $variavelReferencia";
$variavelReferencia = "referenciaTrocada";
echo "<br> $variavelReferencia";
echo "<br> $variavel";