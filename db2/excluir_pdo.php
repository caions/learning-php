<h1>PDO: Delete</h1>

<?php
require_once "conexao_pdo.php";

$sql = "DELETE FROM cadastro WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

if ($stmt->execute([71])) {
  echo "Sucesso";
} else {
  echo "Codigo: " . $stmt->errorCode() . "<br>";
}
