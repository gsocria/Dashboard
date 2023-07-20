<?php
$request = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);

switch ($request) {
  case 'cardapio':
    include_once( 'lista/cardapio.php');
    break;
  case 'funcionario':
    include_once('lista/funcionario.php');
    break;
  case 'eventos':
    include_once('lista/eventos.php');
    break;
    case 'adicionarModal':
      include_once('./formsCreate/eventosCreate.php');
      break; 
}
