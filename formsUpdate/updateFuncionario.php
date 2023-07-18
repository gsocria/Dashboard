<?php
include_once('../config/constantes.php');
include_once('../config/conexao.php');
include_once('../func/func.php');


if (isset($_POST['setor']) || isset($_POST['salario']) || isset($_POST['nome']) || isset($_POST['valor'])) {

    $setor = $_POST['setor'];
    $salario = $_POST['salario'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];

    $set_clauses = "setor = '$setor', salario = '$salario', nome = '$nome'";

    if (empty($setor) || empty($salario) || empty($nome)) {
        echo "<script> alert(Nao foi possivel editar) </script>";
    } else {
        $update = update('funcionario', $set_clauses , 'idfuncionario', $valor);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}


