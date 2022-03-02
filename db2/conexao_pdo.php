<?php

function novaConexao($banco = 'curso_php')
{
  $servidor = '127.0.0.1';
  $usuario = 'root';
  try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario);
    return $conexao;
  } catch (PDOException $e) {
    die('Erro ' . $e->getMessage());
  }
}
