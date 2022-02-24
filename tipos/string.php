<?php

echo 'teste';
echo '<br>';
echo "teste";
echo '<br>';
var_dump('teste');

// concatenação
echo "Uma string " . "Outra string " . 123;
echo '<br>';
echo "'aspas simples'" . '" aspas duplas"';
echo '<br>';
echo "caractere: ". '\&' . '\\';

echo '<br>';
print("tambem existe a função print");

// algumas funções
echo '<br>' . strlen('Tamanho com acentuação'); // acentuação não informada
echo '<br>' . mb_strlen('Tamanho com acentuação','utf-8'); // acentuação  informada
echo '<br>' . strtoupper('Caixa alta');
echo '<br>' . strtolower('CAIXA baixa');
echo '<br>' . ucwords('title case');
echo '<br>' . ucfirst('Só a primeira letra');
echo '<br>' . substr('Só a primeira letra',3,20);
echo '<br>' . str_replace('a','e','Só a primeira letra');
