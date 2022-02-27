<div>Integração HTML</div>
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

<?php if(true): ?> 

  <div><button><?= "Clique" ?></button></div>

<?php endif ?> 

<div><button><?= "Clique" ?></button></div>