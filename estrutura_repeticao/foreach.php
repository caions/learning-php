<?php

$array = [
  1 => "Domingo",
  "Segunda",
  "Terça",
  "Quarta",
  "Quinta",
  "Sexta",
  "Sabado"
];

foreach ($array as $valor) {
  echo "$valor <br>";
}

foreach ($array as $indice => $valor) {
  echo "$indice => $valor <br>";
}


// com o caractere & (endereco)
//altera o array original ex: &$dobrar

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numeros as $key => &$dobrar) {
  $dobrar *= 2;
  echo "$dobrar <br>";
}

print_r($numeros);
