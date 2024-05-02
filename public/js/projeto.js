function deleteRegistrarPaginacao(rotaUrl, idDoRegistro) {
    alert(rotaUrl);
    alert(idDoRegistro);
    if(confirm('Deseja confirmar a exclusão?')){
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers:{'X-CSSRF-TOKEN': $('meta[name=csrf-token]').attr('content')},
            data:{
                id: idDoRegistro,
            },
            beforeSend: function () {
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000,
                });
            },
        }).done(function (data) {
            $.unblockUI();
            if(data.sucess == true) {
                window.location.reload();
            } else {
                alert('Não foi possível excluir');
            }
            console.log(data);

        }).fail(function (data){
            $.unblockUI();
            alert('Não foi possível buscar os dados');
        });

    }

}