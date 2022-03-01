<h1>Delete</h1>

<?php

require_once "conexao.php";

$registros = [];
$conexao = novaConexao();

if ($_GET['excluir']) {
  $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
  $stmt = $conexao->prepare($excluirSQL);
  $stmt->bind_param("i", $_GET['excluir']);
  $stmt->execute();
}

// DDL - Data Definition Lang.
$sql = "SELECT id,nome,nascimento,email FROM cadastro";
$resultados = $conexao->query($sql);

if ($resultados->num_rows > 0) {
  while ($row = $resultados->fetch_assoc()) {
    $registros[] = $row;
  }
} elseif ($conexao->error) {
  echo "Error: " . $conexao->error;
}

$conexao->close();

?>

<table border="1">
  <thead>
    <th>Código</th>
    <th>Nome</th>
    <th>Nascimento</th>
    <th>Email</th>
    <th>Action</th>
  </thead>
  <tbody>
    <?php foreach ($registros as $registro) : ?>
      <tr>
        <td><?= $registro['id'] ?></td>
        <td><?= $registro['nome'] ?></td>
        <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
        <td><?= $registro['email'] ?></td>
        <td>
          <a href="/learning/db/excluir_2.php?&excluir=<?= $registro['id'] ?>">
            <span>Excluir</span>
          </a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>


<style>
  table th {
    text-align: center;
    text-transform: uppercase;
    height: 70px;
    padding: 0 20px;
  }

  table td {
    text-align: center;
    height: 70px;
    padding: 0 20px;
  }

  span {
    height: 30px;
    width: 70px;
    background-color: #F00000;
    color: white;
    font-weight: bold;
  }

  span:active {
    background-color: #790000;
  }

  span:hover {
    cursor: pointer;
  }
</style>