<div>Integração Css</div>
<h1>
  <?php
  echo '<strong>';
  echo "Olá ";
  echo "Mundo";
  echo '</strong>';
  ?>
</h1>

<?=
"<h1><strong>Olá Mundo</strong></h1>";
"isso não será imprimido na tela"
?>

<div><button><?= "Clique" ?></button></div>

<div><button style="width: <?= 50 * 4 ?>px;"><?= "Clique" ?></button></div>

<style>
  button {
    font-weight: <?= 700 ?>;
  }
</style>