$(document).ready(function(){
    $('#alert').hide();
    $('.btn-delete').click(function(e){
        e.preventDefault();
        if ( ! confirm("¿Estas seguro que deseas eliminar el usuario?")) {
            return false;
        }

        
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');
        console.log(form);
        $('#alert').show();

        $.post(
            url,
            form.serialize(),
            function(result){
                row.fadeOut();
                $('#alert').html(result.message);
            }).fail(function(){
                $('#alert').html('Algo salio mal cuadno se intento eliminar el usuario');
            });
    });

    $('.btn-update').click(function(e){

        e.preventDefault();
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');

        Date.prototype.timeNow = function () {
            return ((this.getHours() < 10)?"0":"") + this.getHours() +":"+ ((this.getMinutes() < 10)?"0":"") + this.getMinutes();
        }

        $.post(
            url,
            form.serialize(),
            function(resultado){

                var d = new Date(resultado.fecha);

                var fecha = d.timeNow();
                
                $('#'+resultado.ticket+'').html('<button class="btn btn-dark btn-block mt-1" disabled><b>Entregado - '+fecha+'</b></button> ');

                row.fadeOut(3500);

            }).fail(function(){
                alert("Algo salio mal cuando se intento aceptar el pedido")
            });
    });
});
