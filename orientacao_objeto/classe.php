<?php

class Produto{
  public $nome = 'Brinquedo';
  public $preco;

  public function consultar(){
    echo "nome: $this->nome preco: $this->preco";
  }
}

$produto = new Produto();

echo $produto->nome;
echo "<br/>";
$produto->preco = 20.50;
echo $produto->preco;
echo "<br/>";
$produto->consultar();