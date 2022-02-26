<?php

trait validacao{
  public $nome;

  public function validarString($str){
    return isset($str) && is_string($str);
  }
}

class Usuario2{
  use validacao;
}

$usuario = new Usuario2();
$validado = $usuario->validarString("true");
var_dump($validado);