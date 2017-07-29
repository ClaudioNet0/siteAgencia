jQuery(document).ready(function(){
    $(".ajax-form").submit(function(e) {
        var btn = $(this).find('button[type=submit]');
        btn.button('loading');
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        var currentForm = $(this);
        $.ajax({
            url : formURL,
            type: "POST",
            data : postData,
            alert(data);
            exit();
            success: function(data, textStatus, jqXHR)  {
                //data: return data from server
                if (data) {
                    if (data == 'ok') {
                        $(currentForm).find('.alert').removeClass('alert-danger');
                        $(currentForm).find('.alert').addClass('alert-success');
                        $(currentForm).find('.alert').html('Mensagem enviada com sucesso!');
                        $(currentForm).find('.alert').slideDown('slow');
                    }
                    else {
                        $(currentForm).find('.alert').removeClass('alert-success');
                        $(currentForm).find('.alert').addClass('alert-danger');
                        $(currentForm).find('.alert').html(data);
                        $(currentForm).find('.alert').slideDown('slow');
                    }
                }
                else 
                    alert('Erro: O formulário não retornou dados.');
                    // business logic...
                btn.button('reset');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                //if fails      
                alert(jqXHR.responseText);
                btn.button('reset');
            }
        });
        e.preventDefault(); //STOP default action
        return false;
    });
});