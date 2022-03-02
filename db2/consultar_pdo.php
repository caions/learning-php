<h1>PDO: Read</h1>

<?php
require_once "conexao_pdo.php";

// GET ALL
$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);
echo "<hr>";

// PAGINATION
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 3, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 1, PDO::PARAM_INT);

if ($stmt->execute()) {
  $resultado = $stmt->fetchAll();
  print_r($resultado);
} else {
  echo "Codigo: " . $stmt->errorCode() . "<br>";
  print_r($stmt->errorInfo());
}

echo "<hr>";
// FIND ONE
$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
if ($stmt->execute([':id' => 49])) {
  $resultado = $stmt->fetch();
  print_r($resultado);
} else {
  echo "Codigo: " . $stmt->errorCode() . "<br>";
  print_r($stmt->errorInfo());
}

//$conexao->close();