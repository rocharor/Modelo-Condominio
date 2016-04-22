$(".act-salvar-aviso").click(function(e){
    e.preventDefault();
    var caminho = $(".table").data('caminho');
    var aviso_titulo =  $('#aviso_titulo').val();
    var aviso_data = $('#aviso_data').val();
    var aviso_descricao = $('#aviso_descricao').val();

    $.ajax({
        url: caminho,
        dataType: 'json',
        type: 'POST',
        data: {'act': 'setAviso',
               'aviso_titulo':aviso_titulo,
               'aviso_data':aviso_data,
               'aviso_descricao':aviso_descricao},
        success: function(retorno){
            if(retorno){
                alert('ssss');
            }else{
                alert('xxxx');
            }

        },
        error: function(retorno){
            alert('Erro no sistema !!!');
            return false
        }
    });
})
$(".act-visualizar-aviso").click(function(e){
    e.preventDefault();
    var aviso_id = $(this).parent().parent().data('aviso-id');
    var caminho = $(".table").data('caminho');

    $.ajax({
        url: caminho,
        dataType: 'json',
        type: 'POST',
        data: {'act': 'getAviso',
               'aviso_id':aviso_id},
        success: function(retorno){
            $('#titulo_visualizar').html(retorno[0].titulo);
            $('#data_visualizar').html(retorno[0].data_evento);
            $('#descicao_visualizar').html(retorno[0].descricao);

            $('#modal_visualizar_aviso').modal('show');
        },
        error: function(retorno){
            alert('Erro no sistema !!!');
            return false
        }
    });


});

$(".act-editar-aviso").click(function(e){
    e.preventDefault();
    var aviso_id = $(this).parent().parent().data('aviso-id');
    var caminho = $(".table").data('caminho');
    $.ajax({
        url: caminho,
        dataType: 'json',
        type: 'POST',
        data: {'act': 'getAviso',
               'aviso_id':aviso_id},
        success: function(retorno){
            $('#titulo_editar').val(retorno[0].titulo);
            $('#data_editar').val(retorno[0].data_evento);
            CKEDITOR.instances["editor_aviso_editar"].setData(retorno[0].descricao);

            $('#modal_editar_aviso').modal('show');
        },
        error: function(retorno){
            alert('Erro no sistema !!!');
            return false
        }
    });


});

$(".act-excluir-aviso").click(function(e){
    e.preventDefault();
    var aviso_id = $(this).parent().parent().data('aviso-id');
    var caminho = $(".table").data('caminho');
    if(confirm('Deseja realmente excluir o aviso?')){
        $.ajax({
            url: caminho,
            dataType: 'json',
            type: 'POST',
            data: {'act': 'excluirAviso',
                   'aviso_id':aviso_id},
            success: function(retorno){
                if(retorno == true){
                    alert('Excluido com sucesso.');
                    window.location.reload();
                }else{
                    alert('Erro ao excluir.');
                }
            },
            error: function(retorno){
                alert('Erro no sistema !!!');
                return false
            }
        });
    }

});

