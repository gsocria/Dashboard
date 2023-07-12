<?php
include_once '../config/constantes.php';
include_once '../config/conexao.php';
include_once '../func/func.php';

if (isset($_POST['id']) && isset($_POST['tabela'])) {
  $id = $_POST['id'];
  $tabela = $_POST['tabela'];

  deletar("$tabela", $id, 'idcardapio');

  header('Location: ../index.php');
}
?>