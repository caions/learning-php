<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(CONTROLLER_PATH . '/login.php');

//loadView('login');

/*  require_once(MODEL_PATH . '/Login.php');

$login = new Login([
  'email'=> 'admin@cod3r.com.br',
  'password'=> 'a'
]);

try {
  $login->checkLogin();
  echo 'Deu certo';
} catch (\Throwable $th) {
  echo 'Problema no login';
} */