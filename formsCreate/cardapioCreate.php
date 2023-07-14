<?php
include_once('../config/constantes.php');
include_once('../config/conexao.php');
include_once('../func/func.php');


if (isset($_POST['imagem']) || isset($_POST['preco']) || isset($_POST['nome-prato']) || isset($_POST['tipo-menu']) || isset($_POST['descricao'])) {

  $imagem = $_POST['imagem'];
  $preco = $_POST['preco'];
  $nomePrato = $_POST['nome-prato'];
  $descricao = $_POST['descricao'];
  $tipoMenu = $_POST['tipo-menu'];
  $MenuCardapio = $_POST['tipo-menu'];

  if (empty($imagem) || empty($preco) || empty($nomePrato) || empty($descricao) || empty($tipoMenu) || empty($MenuCardapio)) {
    echo "<script> alert(Nao foi possivel criar) </script>";
    return;
  }

  $update = create('cardapio', 'idmenucardapio,preco,imagem,nomePrato,descricao', "'$MenuCardapio','$preco','$imagem','$nomePrato','$descricao'");
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit();

}
?>