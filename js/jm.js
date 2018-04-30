/*
 * Descripción: Código de funciones javascript comunes
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

// jQuery JM
$(document).ready(function(){
    $('#form_entrada').submit(function(evento){
        // Recogemos los datos del formulario en una variable tipo array.
        var datosFormulario = $(this).serializeArray();
        evento.preventDefault(); // Eliminamos el comportamiento por defecto del submit para que sólo se procese jQuery.
        // Incluimos en el array la información del tipo de proceso
        datosFormulario.push({"name": "proceso", "value": "login"});
        // Creamos objeto json para pasar el array a json
        console.log(datosFormulario);
        var jsonDatos = {};
        // Recorremos el array para guardarlo en json
        $.each(datosFormulario, function(){
            if(typeof jsonDatos[this.name] == 'undefined') {
                jsonDatos[this.name] = this.value || '';
            } else {
                jsonDatos[this.name] += ',' + this.value;
            }
        });
        console.log(jsonDatos);        
        // Bloque Ajax
        /**
        $.ajax({
            url: '/index2.php',
            type: 'post',
            timeout: 10000,
            dataType: 'json',
            data: jsonDatos,
            beforeSend: function() {
                // Deshabilitamos boton y mostramos efecto de espera
                $('#aceptar').prop('disabled', true);
                $('.fa-spinner').css('display', '');
            }
        })
        .done(function(msg){ // Se procesa correctamente la petición
            console.log("Petición procesada correctamente");
            console.log(msg);
        })
        .fail(function(jqXHR, statusText){ // Hay un error y no se procesa la petición
            console.log("Petición incorrecta... no procesada");
            console.log(jqXHR);
            console.log(statusText);
        })
        .always(function(){
            console.log("Este paso se procesa siempre... independientemente del resultado de la petición");
        });
        */
       
        var jsonDatosB = {
            
            proceso: "login"
        }
       
        $.ajax({
            url: '/index2.php',
            type: 'post',
            dataType: 'json',
            data: jsonDatosB,
            beforeSend: function() {
                // Deshabilitamos boton y mostramos efecto de espera
                $('#aceptar').prop('disabled', true);
                $('.fa-spinner').css('display', '');
            },
            success: function(respuesta) {
                console.log(respuesta);
                setTimeout(function(){
                    $('.fa-spinner').hide();
                    $('#aceptar').prop("disabled", false);
                },500);
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            }
        });
        
    });
});