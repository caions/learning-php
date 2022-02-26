<?php

class Pessoa
{
  public $nome;
  public $idade;

  function __construct($nome, $idade)
  {
    $this->nome = $nome;
    $this->idade = $idade;
  }

  function apresentar()
  {
    return "nome: $this->nome <br> idade: $this->idade";
  }
}

/* $pessoa = new Pessoa("Caio", 34);
echo $pessoa->apresentar(); */

class Usuario extends Pessoa
{
  /*   public $nome;
  public $idade; */
  public $login;

  function __construct($nome, $idade, $login)
  {
    /*    $this->nome = $nome;
    $this->idade = $idade; */
    parent::__construct($nome, $idade);
    $this->login = $login;
  }

  function apresentar() // @overides
  {
    echo parent::apresentar(); // return "nome: $this->nome <br> idade: $this->idade
    return "<br>Login: $this->login";
  }
}
echo "<br>";
$usuario = new Usuario("Caio", 34, 'lokishide');
echo $usuario->apresentar();
