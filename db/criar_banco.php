<h1>Criar Banco</h1>

<?php

require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE curso_php';

$resultado = $conexao->query($sql);

if($resultado){
  echo "Sucesso";
}else{
  echo "Erro:" . $conexao->error;
}

$conexao->close();