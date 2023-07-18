<?php
include_once URLBASEPATH . '/config/constantes.php';
include_once URLBASEPATH . '/config/conexao.php';

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
        echo 'Exception:' . $e->getMessage();
    
    }

}


function update($table, $clauses, $idtabela, $id) {
    $conn = conectar();
    try {
        $listar = $conn->prepare("UPDATE $table SET $clauses WHERE $idtabela = :id");
        $listar->bindParam(':id', $id);
        $listar->execute();
        
        if ($listar->rowCount() > 0) {
            return $listar->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }

    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function deletar($table, $id,$idTable)
{
    $conn = conectar();
    try {
        $listar = $conn->prepare("DELETE FROM $table WHERE $idTable=$id");
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
