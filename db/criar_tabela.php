<h1>Criar Tabela</h1>

<?php

require_once "conexao.php";

// DDL - Data Definition Lang.
$sql = "CREATE TABLE cadastro(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  nascimento DATE,
  email VARCHAR(100) NOT NULL,
  site VARCHAR(100),
  filhos INT,
  salario FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
  echo "Sucesso";
}else{
  echo "Erro:" . $conexao->error;
}

$conexao->close();