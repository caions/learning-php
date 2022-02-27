<?php
session_start();

if($_COOKIE['usuario']){
  $_SESSION['usuario'] = $_COOKIE['usuario'];
};

if($_SESSION['usuario']){
  header('Location: index.php');
}

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
  $usuarios = [
    [
      "nome" => "Aluno Coder",
      "email" => "aluno@cod3r.com.br",
      "senha" => "1234567"
    ],
    [
      "nome" => "Caio",
      "email" => "caio@caio",
      "senha" => "1234"
    ]
  ];

  foreach ($usuarios as $usuario) {
    $emailValido = $email === $usuario['email'];
    $senhaValida = $senha === $usuario['senha'];

    if ($emailValido && $senhaValida) {
      $_SESSION['erros'] = null;
      $_SESSION['usuario'] = $usuario['nome'];
      $exp = time() * 60 * 60 * 24 * 30;
      setcookie('usuario', $usuario['nome'], $exp);
      header('Location: index.php');
    }
  }

  if (!$_SESSION['usuario']) {
    $_SESSION['erros'] = ["Usuario/Senha inválido!"];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="login">
  <header>
    <h1>Seja Bem vindo</h1>
  </header>
  <div class="principal">
    <div class="conteudo">
      <h3>Identifique-se</h3>
      <?php if ($_SESSION['erros']) : ?>
        <div class="erros">
          <?php foreach ($_SESSION['erros'] as $erro) : ?>
            <p><?= $erro ?></p>
          <?php endforeach ?>
        </div>
      <?php endif ?>
      <form action="#" method="post">
        <div>
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email">
        </div>
        <div>
          <label for="senha">Senha</label>
          <input type="senha" name="senha" id="senha">
        </div>
        <button>Entrar</button>
      </form>
    </div>
  </div>
</body>

</html>