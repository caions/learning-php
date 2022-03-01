<h1>Create</h1>

<?php

require_once "conexao.php";

// DDL - Data Definition Lang.
$sql = "INSERT INTO cadastro(
  nome,
  nascimento,
  email,
  site,
  filhos,
  salario
)VALUES (
  'Charles',
  '1985-07-25',
  'charles@email.com',
  'https://charles.site.com.br',
  1,
  20000
  )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
  echo "Sucesso";
}else{
  echo "Erro:" . $conexao->error;
}

$conexao->close();