<?php
$lista = array(1, 2, 3.4, "texto");
$lista2 = [1, 2, 3.4, "texto"];

echo $lista[2];
echo '<br>';
echo $lista2[3];
echo '<br>';

// arrays com indices nomeados

$listaNomes = ["nome" => "Caio", "idade" => 34];

echo $listaNomes["nome"];
