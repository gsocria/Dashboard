<?php
include_once('../config/constantes.php');
include_once('../config/conexao.php');
include_once('../func/func.php');


if (isset($_POST['setor']) || isset($_POST['salario']) || isset($_POST['nome'])) {

    $setor = $_POST['setor'];
    $salario = $_POST['salario'];
    $nome = $_POST['nome'];


    if (empty($setor) || empty($salario) || empty($nome)) {
        echo "<script> alert(Nao foi possivel editar) </script>";
    } else {
        $create = create('funcionario','idprofissao, nome, salario',"'$setor','$nome','$salario'");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}