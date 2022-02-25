<form action="#" method="POST">
  <input type="text" name="nome">
  <input type="text" name="idade">
  <button>Enviar</button>
</form>

<?php
// echo "{$_POST["nome"]}"; // Caio
// echo "{$_POST["idade"]}"; // 34

print_r($_GET);
echo "<br>";
print_r($_POST);
