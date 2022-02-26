<?php

interface Animal{
  public function correr();
}

interface Mamifero{
  public function mamar();
}

interface Canino extends Animal,Mamifero{
  public function latir();
}


class Cachorro implements Canino{

  public function correr(){
   echo "correndo";
  }

  public function latir(){
    echo "latindo";
   }

   public function mamar(){
    echo "mamando";
   }
}

$cachorro = new Cachorro();

$cachorro->correr();
echo "<br>";
$cachorro->latir();
echo "<br>";
$cachorro->mamar();
echo "<br>";
var_dump($cachorro instanceof Canino);
echo "<br>";
echo gettype($cachorro);