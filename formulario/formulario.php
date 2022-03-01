<h1>Formulario</h1>

<h2>Cadastro</h2>

<?php
if (count($_POST) > 0) {
  $erros = [];

  // isset($_POST['nome])
  if (!filter_input(INPUT_POST, 'nome')) {
    $erros['nome'] = 'Nome é origatório';
  }

  if (filter_input(INPUT_POST, 'nascimento')) {
    $data = DateTime::createFromFormat(
      'd/m/Y',
      $_POST['nascimento']
    );
    if (!$data) {
      $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
    }
  }

  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $erros['email'] = 'Email inválido';
  }

  if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
    $erros['site'] = 'Site inválido';
  }

  $filhosConfig = [
    "options" => ["min_range" => 1, "max_range" => 20]
  ];

  if (
    !filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig)
    && $_POST['filhos'] != 0
  ) {
    $erros['filhos'] = "Quantidade de filhos inválida (0-20)";
  }

  $salarioConfig = [
    "options" => ["decimal" => ',']
  ];

  if (!filter_var(
    $_POST['salario'],
    FILTER_VALIDATE_FLOAT,
    $salarioConfig
  )) {
    $erros['salario'] = "Salário inválido";
  }
}
?>


<form action="" method="post">
  <label for="nome">Nome:</label>
  <input  class="<?= $erros['nome'] ?? ''? 'invalid-input': '' ?>"
   type="text" id="nome" name="nome" placeholder="nome" value="<?= $_POST['nome'] ?>">
  <div class="invalid-feedback">
    <?= $erros['nome'] ?? ''  ?>
  </div>


  <label for="nascimento">Nascimento:</label>
  <input  class="<?= $erros['nascimento'] ?? ''? 'invalid-input': '' ?>"
  type="text" id="nascimento" name="nascimento" placeholder="nascimento" value="<?= $_POST['nascimento'] ?>">
  <div class="invalid-feedback">
    <?= $erros['nascimento'] ?? '' ?>
  </div>

  <label for="email">E-mail:</label>
  <input type="text"
  class="<?= $erros['email'] ?? ''? 'invalid-input': '' ?>"
   id="email" name="email" placeholder="email" value="<?= $_POST['email'] ?>">
  <div class="invalid-feedback">
    <?= $erros['nome'] ?? '' ?>
  </div>

  <label for="site">Site:</label>
  <input class="<?= $erros['site'] ?? ''? 'invalid-input': '' ?>"
  type="text" id="site" name="site" placeholder="site" value="<?= $_POST['site'] ?>">
  <div class="invalid-feedback">
    <?= $erros['site'] ?? '' ?>
  </div>

  <label for="filhos">Qtd filhos:</label>
  <input class="<?= $erros['filhos'] ?? ''? 'invalid-input': '' ?>"
  type="number" id="filhos" name="filhos" placeholder="filhos" value="<?= $_POST['filhos'] ?>">
  <div class="invalid-feedback">
    <?= $erros['filhos'] ?? '' ?>
  </div>

  <label for="salario">Salário:</label>
  <input class="<?= $erros['salario'] ?? ''? 'invalid-input': '' ?>"
  type="text" id="salario" name="salario" placeholder="salario" value="<?= $_POST['salario'] ?>">
  <div class="invalid-feedback">
    <?= $erros['salario'] ?? '' ?>
  </div>

  <button>Enviar</button>
</form>

<style>
  form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  label {
    justify-content: left;
    align-items: left;
    width: 50%;
  }

  input {
    padding-left: 10px;
    width: 50%;
    height: 30px;
    margin-top: 10px;
    margin-bottom: 5px;
  }

  button {
    margin-top: 15px;
    background-color: green;
    color: white;
    text-transform: uppercase;
    width: 50%;
  }

  .invalid-feedback {
    display: flex;
    align-items: left;
    justify-content: left;
    width: 50%;
    margin-bottom: 10px;
    font-size: small;
    color: red;
  }

  .invalid-input {
    border-color: red;
  }
</style>