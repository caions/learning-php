<?php

for ($count = 1; $count <= 5; $count++) {
  echo "$count <br>";
}


// iterar um array

$dias_da_semana = [
  "Domingo", "Segunda",
  "Terça", "Quarta",
  "Quinta", "Sexta",
  "Sabado"
];

echo "<br>";
print_r($dias_da_semana);
/* Array ( 
[0] => Domingo [1] => Segunda 
[2] => Terça [3] => Quarta 
[4] => Quinta [5] => Sexta 
[6] => Sabado )*/
echo "<br>";
for ($i = 0; $i < count($dias_da_semana); $i++) {
  echo "$dias_da_semana[$i] ";
  // Domingo Segunda Terça Quarta Quinta Sexta Sabado
}
