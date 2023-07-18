<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/lista.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="./assets/js/modal.js"></script>

  <title>Document</title>
</head>

<body>



  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Cardapio</h1>
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
    <div class="container-fluid">
      <!-- component -->
      <div id="adicionar_open" class="px-4 py-2 bg-green-500 text-white rounded-md cursor-pointer ml-12 w-28">
        <button>adicionar</button>
      </div>

      <div id="adicionar_panel"
        class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center hidden">
        <div class="modal_container bg-white w-4/12 md:max-w-11/12 mx-auto z-50 overflow-y-auto">
          <div class="modal-content py-4 text-left px-6">
            <div class="flex justify-between items-center pb-3">
              <p class="text-2xl font-bold text-black-500">Adicionar</p>
              <div id="adicionar_close" class="modal-close cursor-pointer z-50">
                <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                  viewBox="0 0 18 18">
                  <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                  </path>
                </svg>
              </div>
            </div>
            <div class="my-5 mr-5 ml-5 flex  justify-center">
              <form action="./formsCreate/cardapioCreate.php" method="post" class="w-full max-w-sm">

                <div class="mb-4">
                  <label for="email-login" class="block text-gray-700 text-sm font-bold mb-2">Nome do prato</label>
                  <input type="text" name="nome-prato" id="email-login"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                </div>

                <div class="mb-4">
                  <label for="senha-login" class="block text-gray-700 text-sm font-bold mb-2">Tipo do prato</label>
                  <select name="tipo-menu" id="">
                    <?php
                    $listarMenu = viewAll('*', 'menucardapio');
                   
                    foreach ($listarMenu as $menuItems) {
                      $idMenu = $menuItems->idmenucardapio;
                      $nomeMenu = $menuItems->nomeMenu;
                      ?>
                      <option value="<?php echo $idMenu ?>"> <?php echo $nomeMenu ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="mb-4">
                  <label for="senha-login" class="block text-gray-700 text-sm font-bold mb-2">Preço</label>
                  <input type="number" name="preco" id="senha-login"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                </div>
                <div class="mb-4">
                  <label for="descricao" class="block text-gray-700 text-sm font-bold mb-2">Descrição</label>
                  <input type="text" name="descricao" id="descricao"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                </div>

                <div class="mb-4">
                  <label for="upload-imagem" class="block text-gray-700 text-sm font-bold mb-2">Imagem</label>
                  <input type="file" name="imagem" id="upload-imagem" accept="image/*"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                </div>


                <div class="flex justify-center">
                  <button type="submit" class="bg-black text-white font-bold py-2 px-4 rounded">
                    Enviar
                  </button>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>



      <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Imagem</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">titulo</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">video</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Descriçao</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>

            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php

            $listarCardapio = viewAll('*', 'cardapio');

            if ($listarCardapio !== false) {
              foreach ($listarCardapio as $listarCardapioItem) {
                $idCardapio = $listarCardapioItem->idcardapio;
                $img = $listarCardapioItem->img;
                $descricao = $listarCardapioItem->descricao;
                $titulo = $listarCardapioItem->nomePrato;
                $preco = $listarCardapioItem->preco;
                $status = $listarCardapioItem->ativo;
                ?>
                <tr class="hover:bg-gray-50">
                  <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="text-sm">
                      <div class="font-medium text-gray-700">
                        <?php echo $idCardapio ?>
                      </div>
                    </div>
                  </th>
                  <td class="px-6 py-4">
                    <img width="50px" height="50px" src="<?php echo $img ?>" alt="">
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $titulo ?>
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $preco ?>
                  </td>
                  <td class="px-6 py-4">
                    <?php echo $descricao ?>
                  </td>
                  <td class="px-6 py-4">
                    <span
                      class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                      <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                      Active
                    </span>
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex justify-end gap-4">
                      <?php

                      ?>
                      <form action="./formsDelete/delete.php" method="post">
                        <input name="tabela" id="id" value="cardapio" hidden required>
                        <input name="id" id="id" value="<?php echo $idCardapio; ?>" hidden required>
                        <button type="submit">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                        </button>
                      </form>
                      <a x-data="{ tooltip: 'Edite' }" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                      </a>
                    </div>
                  </td>
                </tr>
                </tr>
                <?php
              }
            }
            echo ' <tr class="hover:bg-gray-50"><h1 class="text-center">Esta vazio</h1></tr>';
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