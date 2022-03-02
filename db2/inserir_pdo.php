<h1>PDO: Create</h1>

<?php

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
(nome,email,nascimento,site,filhos,salario)
VALUES(
  'Caio Nascimento',
  'caio@caio.com',
  '1999-7-21',
  'http://caio',
  0,
  15000
)";

$conexao = novaConexao();

if ($conexao->exec($sql)) {
  $id = $conexao->lastInsertId();
  echo "Novo cadastro com id $id.";
} else {
  echo $conexao->errorCode() . "<br>";
  print_r($conexao->errorInfo());
}
