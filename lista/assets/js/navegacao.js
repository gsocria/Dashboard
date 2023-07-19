
  $('.routes').click(function (e) {
    e.preventDefault();

    let navigation = $(this).attr('routes');

    let stats = {
      action: navigation
    };

    $.ajax({
      url: 'routes.php',
      type: 'POST',
      data: stats,
      dataType: 'html',
      success: function (response) {
        $('#content').html(response);
      },
      error: function (xhr, status, error) {
        console.error('Ocorreu um erro na requisição:', error);
      }
    });
  });
