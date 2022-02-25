<?php

$lista = array(
  'primeiro' => 1,
  'segundo' => 2,
  'terceiro' => 3
);

$lista2 = [
  'segundo' => 2,
  'primeiro' => 1,
  'terceiro' => 3
];

var_dump($lista == $lista2); // true
echo "<br>";
var_dump($lista === $lista2); // false
