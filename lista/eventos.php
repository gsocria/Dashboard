<!-- component -->
<!DOCTYPE html>
<html lang="pt-br">

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



            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Imagem</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nome</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Valor</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Descriçao</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Cadastro</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
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
                            $iconLixeira = $listarEventosItem->iconLixeira;
                            

                        ?>

                            <tr class="hover:bg-gray-50">
                                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                    <div class="text-sm">
                                        <div class="font-medium text-gray-700">
                                            <?php echo $ideventos ?>
                                        </div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo $img ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $nome ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $valor ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $descricao ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $cadastro ?>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                        Active
                                        
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-4">
                                        <a x-data="{ tooltip: 'Delete' }" href="#">
                                        <img src="./assets/img/<?php echo $iconLixeira?>.png" alt="">
                                        </a>
                                        <a x-data="{ tooltip: 'Edite' }" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </a>
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
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</body>

</html>