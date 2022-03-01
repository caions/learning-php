<h1>Delete</h1>

<?php

require_once "conexao.php";

// DDL - Data Definition Lang.
$sql = "DELETE FROM cadastro WHERE id = 2";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
  echo "Sucesso";
}else{
  echo "Erro:" . $conexao->error;
}

$conexao->close();