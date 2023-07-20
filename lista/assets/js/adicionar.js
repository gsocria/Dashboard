function adicionarGeral(idform, idmodal, paginaRetorno, paginaCadastro) {
    $(document).ready(function () {

        $('#' + idform).on('submit', function (e) {
            e.preventDefault();

            let dados = $(this).serializeArray();

            dados.push({
                name: 'action', value: paginaCadastro
            })
        })

        $.ajax({
            url: 'routes.php',
            type: 'POST',
            data: dados,
            dataType: 'html',
            success: function (response) {
                $('#' + idmodal).modal('hide');
                setTimeout(function () {
                    atualizarPagina(paginaRetorno); //
                }, 1000);
            },
            error: function (xhr, status, error) {
                console.error('Ocorreu um erro na requisição:', error);
            }
        });
    });
};

function atualizarPagina(dataMenu) {
    let dados = {
        action: dataMenu
    }

    $.ajax({
        url: 'routes.php',
        type: 'POST',
        data: dados,
        dataType: 'html',

        beforeSend: function () {

        },
        success: function (retorno) {
            $('#content').html('retorno');
        }
    });
}







