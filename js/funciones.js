/*
 * Descripción: Código de funciones javascript comunes a todas las páginas html
 * Versión: 1.0
 * Fecha inicio: 05/02/2018
 * Fecha final:
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */


function mostrarMenu(identificador) {
    var x = document.getElementById(identificador);
    if (x.className.indexOf("w3-show") == -1 ) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace("w3-show", "");
    }
}

// jQuery
$(document).ready(function() {
    // Ejemplo: Envio de datos con AJAX
    // Realizamos el proceso si pulsamos algún botón SUBMIT del formulario con id="entrapp"
    $('#entrapp').submit(function(evento) {
        evento.preventDefault(); // Para procesar sólo por jQuery
        var datosFormulario = $(this).serializeArray(); // Recojemos los datos del formulario
        datosFormulario.push({name: 'etiq', value: 'login'}); // Identificación del proceso de login
        // Inicio de cabecera Ajax - datos necesarios para ejecución
        $.ajax({
            url: './index.php',
            type: 'post',
            dataType: 'json',
            data: datosFormulario,
            beforeSend: function() {
                $('#aceptar').prop("disabled", true);
                $('.fa-spinner').css('display','');
            }
        })
        // Opciones y operaciones según resultado del request
            .done(function(respuesta){
                $('#mensajeDatos').html("Validado, redireccionando ..." + respuesta.data.message);
            })
            .fail(function(respuesta){
                if(respuesta.success)
                $('#mensajeDatos').html(respuesta.data.message);
            })
            .always(function(){
                setTimeout(function(){
                    $('.fa-spinner').hide();
                $('#aceptar').prop("disabled", false);
                },500);
        });
    });
    
    $('#olv_contras').click(function(){
        
    });
});