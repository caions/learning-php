<h1>Read</h1>

<?php

require_once "conexao.php";

// DDL - Data Definition Lang.
$sql = "SELECT id,nome,nascimento,email FROM cadastro";

$conexao = novaConexao();
$resultados = $conexao->query($sql);

$registros = [];

if ($resultados->num_rows > 0) {
  while ($row = $resultados->fetch_assoc()) {
    $registros[] = $row;
  }
} elseif ($conexao->error) {
  echo "Error: " . $conexao->error;
}

if ($resultados) {
  echo "<br/> Sucesso";
} else {
  echo "Erro:" . $conexao->error;
}

$conexao->close();

?>


<table border="1">
  <thead>
    <th>Código</th>
    <th>Nome</th>
    <th>Nascimento</th>
    <th>Email</th>
  </thead>
  <tbody>
    <?php foreach ($registros as $registro) : ?>
      <tr>
        <td><?= $registro['id'] ?></td>
        <td><?= $registro['nome'] ?></td>
        <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
        <td><?= $registro['email'] ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>