<?php
session_start();
?>

<h1>Logado!</h1>
<?= "Usuario: ".$_SESSION['usuario'] ?>
<br>
<a href="/learning/projetos/login/logout.php">Deslogar</a>