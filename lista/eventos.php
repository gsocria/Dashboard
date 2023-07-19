<!-- component -->
<!DOCTYPE html>
<html lang="pt-br">

<?php
include_once('./config/constantes.php');
include_once('./config/conexao.php');
include_once('./func/func.php');
?>

<head>

    <section class="intro">
        <div class="bg-image h-100">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Imagem</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Valor</th>
                                                    <th scope="col">Descriçao</th>
                                                    <th scope="col">Cadastro</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                                                <?php

                                                $listarEventos = viewAll('*', 'eventos');

                                                foreach ($listarEventos as $listarEventosItem) {
                                                    $ideventos = $listarEventosItem->ideventos;
                                                    $img = $listarEventosItem->img;
                                                    $nome = $listarEventosItem->nome;
                                                    $valor = $listarEventosItem->valor;
                                                    $descricao = $listarEventosItem->descricao;
                                                    $cadastro = $listarEventosItem->cadastro;
                                                    $ativo = $listarEventosItem->ativo;
                                                    ?>

                                                    <tr>
                                                        <th class="form-check">
                                                                <div>
                                                                    <?php echo $ideventos ?>
                                                                </div>
                                                            
                                                        </th>
                                                        <td >
                                                            <?php echo $img ?>
                                                        </td>
                                                        <td >
                                                            <?php echo $nome ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $valor ?>
                                                        </td>
                                                            <?php echo $descricao ?>
                                                        </td>
                                                        <td >
                                                            <?php echo $cadastro ?>
                                                        </td>
                                                        <td>
                                                        
                                                                Active


            
                                                        </td>
                                                        <td>
                                                            <div>
                                                                
                                                                <form action="./formsDelete/delete.php" method="post">
                                                                    <input name="tabela" id="id" value="eventos" hidden
                                                                        required>
                                                                    <input name="id" id="id"
                                                                        value="<?php echo $ideventos; ?>" hidden required>
                                                                    <button class="fas fa-trash"type="submit">
                                                                                
                                                                    </button>
                                                                </form>
                                                                <aclas class="fa-regular fa-pen-to-square">
                                                                
                                                </aclass>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/lista.css">
    <script src="./assets/js/modal.js"></script>

    <title>Document</title>
</head>

<body>
    <?php
    include_once('./config/constantes.php');
    include_once('./config/conexao.php');
    include_once('./func/func.php');
    ?>



    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Eventos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Eventos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <!-- Button trigger modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success ml-5 mt-4" data-toggle="modal" data-target="#exampleModal">
            Adicionar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="basic-url">Eventos:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-dark">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

    </section>


