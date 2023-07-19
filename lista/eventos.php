<!-- component -->
<!DOCTYPE html>
<html lang="en">

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</html>