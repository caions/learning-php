<?php
session_start();

if($_COOKIE['usuario']){
  $_SESSION['usuario'] = $_COOKIE['usuario'];
};

if(!$_SESSION['usuario']){
  header('Location: projetos/login/login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste Mamp</title>
</head>
<body>
  <h1>Teste Mamp</h1>
  <?php 
 /*    phpinfo() */
  ?>
</body>
</html>