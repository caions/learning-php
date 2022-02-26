<?php

class Produto2
{
  public $nome = 'Brinquedo';
  public $preco;

  function __construct($nome, $preco){
    $this->nome = $nome;
    $this->preco = $preco;
  }

  public function consultar(){
    echo "nome: $this->nome preco: $this->preco";
  }
}

$produto = new Produto2("Carrinho",15.50);


echo $produto->nome;
echo "<br>";
echo $produto->preco;