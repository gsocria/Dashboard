<?php
include_once('../config/constantes.php');
include_once('../config/conexao.php');
include_once('../func/func.php');


if (isset($_POST['imagem']) || isset($_POST['nome']) || isset($_POST['valor']) || isset($_POST['descricao'])) {

    $imagem = $_POST['imagem'];
    $valor = $_POST['valor'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];


    if (empty($imagem) || empty($valor) || empty($nome) || empty($descricao)) {
        echo "<script> alert(Nao foi possivel editar) </script>";
    } else {
        $create = create('eventos','img, valor, nome, descricao',"'$imagem','$valor','$nome','$descricao'");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}