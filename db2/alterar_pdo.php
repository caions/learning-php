<h1>PDO: UPDATE</h1>

<?php

require_once "conexao_pdo.php";
$conexao = novaConexao();

$sql = "UPDATE cadastro 
SET
nome = ?,
email = ?,
nascimento = ?,
site = ?,
filhos = ?,
salario = ? WHERE ID = ?";

$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
  'Caio Nascimento',
  'caio@caio.com',
  '1999-7-21',
  'http://caio',
  0,
  15000,
  49
]);

if ($conexao->exec($sql)) {
  $id = $conexao->lastInsertId();
} else {
  print_r($conexao->errorInfo());
}
