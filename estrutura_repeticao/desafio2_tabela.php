<form action='#' method="POST">
  <label for="linhas">Linhas:</label>
  <input type="number" name="linhas" id="linhas" value=<?= ($_POST)["linhas"] ?? 4 ?>><br>
  <label for="colunas">Colunas:</label>
  <input type="number" name="colunas" id="colunas" value=<?= ($_POST)["colunas"] ?? 4 ?>>
  <button>Criar</button>
</form>

<table>
  <?php
  $linhas = intval(($_POST)["linhas"]);
  $colunas = intval(($_POST)["colunas"]);

  if (!$linhas) $linhas = 4;
  if (!$colunas) $colunas = 4;

  for ($i = 1; $i <= $linhas; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $colunas; $j++) {
      echo "<td>$j</td>";
    }
    echo "</tr>";
  }
  ?>
</table>


<style>
  table {
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 20px 0px;
  }

  table tr {
    border: 1px solid #444;
  }

  table td {
    padding: 10px 20px;
  }
</style>