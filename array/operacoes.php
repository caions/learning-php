<?php

$dados1 = [
  "Caio",
  "Charles",
  "Cyntia"
];

echo "<br>" . is_array($dados1); // type of
echo "<br>" . count($dados1); // length

unset($dados1["0"]); // shift

// concatena dois arrays

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8, 10];

$decimais = $pares + $impares;
$decimais = array_merge($pares, $impares);
sort($decimais);
echo "<br>";

print_r($decimais); // [0,1,2,3,4,5,6,7,8,9,10]