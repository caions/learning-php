<!-- 
  Usar o for para imprimir...
  #
  ##
  ###
  ####
  ####
  1) Pode usar o imcremento
  2) Não pode usar o icremoento
 -->

 <?php

 //1 
 $cerquilha = "#";
for ($i=0; $i <5 ; $i++) { 
  echo $cerquilha . "<br>";
  $cerquilha .= $cerquilha[0];
}

//1 refactor
$impressao = '';
for ($i=0; $i <5 ; $i++) { 
  $impressao .= "#";
  echo $impressao . "<br>";
}

//2

for(
  $impressao2 = "#";
  $impressao2 !== "######";
  $impressao2 .= "#"
){
  echo "$impressao2 <br>";
}