<?php
include_once('../config/constantes.php');
include_once('../config/conexao.php');

function create($table, $fields, $values)
{
    $conn = conectar();
    try {
        $listar = $conn->prepare("INSERT INTO $table($fields) VALUES ($values)");
        $listar->execute();
        if ($listar->rowCount() > 0) {
            return $listar->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }

    } catch (PDOException $e) {
        echo 'Exception:';
        return ($e->getMessage());

    }

}
function update($table, $fields, $id, $values)
{
    $conn = conectar();
    try {
        $listar = $conn->prepare("UPDATE produtos SET $fields = $values WHERE
        id = $id");
        $listar->execute();
        if ($listar->rowCount() > 0) {
            return $listar->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }

    } catch (PDOException $e) {
        echo 'Exception:';
        return ($e->getMessage());

    }

}
function deletar($table, $id,$idTable)
{
    $conn = conectar();
    try {
        $listar = $conn->prepare("DELETE FROM$table WHERE $idTable=$id");
        $listar->execute();
        if ($listar->rowCount() > 0) {
            return $listar->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }

    } catch (PDOException $e) {
        echo 'Exception:';
        return ($e->getMessage());

    }

}
function viewAll($table, $fields)
{
    $conn = conectar();
    try {

        $listar = $conn->prepare("SELECT $table FROM $fields");
        $listar->execute();
        if ($listar->rowCount() > 0) {
            return $listar->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }

    } catch (PDOException $e) {
        echo 'Exception:';
        return ($e->getMessage());

    }

}
