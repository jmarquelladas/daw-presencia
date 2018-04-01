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

// jQuery
$(document).ready(function() {
    // Ejemplo: Envio de datos con AJAX
    // Realizamos el proceso si pulsamos algún botón SUBMIT del formulario con id="entrapp"
    $('form#entrapp').submit(function(evento) {
        evento.preventDefault(); // Para procesar sólo por jQuery
        var datosFormulario = $(this).serializeArray(); // Recojemos los datos del formulario en formato Array
        datosFormulario.push({name: 'etiq', value: 'login'}); // Añadimos la identificación del proceso: login (entrada al sistema)
        console.log("Datos nativos traspasados del formulario:");
        console.log((datosFormulario));
        //console.log("Datos nativos pasados a string");
        //console.log(JSON.stringify(datosFormulario));
        
        
        
        // Nueva programación: 1/04/2018 a las 23:26
        // Revisar info de: https://www.w3schools.com/jquery/jquery_ajax_intro.asp
        // Fin de la nueva programación
        
        
        
        /** Domingo 1 de abril 2018 a las 23:24 joras: Por ahora con esto no adelanto nada, por lo que voy a probar alguna otra opción para continuar con el proyecto.
        // Nuevo método según: http://www.developerdrive.com/2013/04/turning-a-form-element-into-json-and-submiting-it-via-jquery/
        // Creamos variable json
        var datosJson = {};
        // Realizamos el recorrido del array para añadir datos a nuestro json
        $.each(datosFormulario, function(){
            //datosJson[this.name] = this.value;
            if(typeof datosJson[this.name] === 'undefined') {
                datosJson[this.name] = this.value || '';
            } else {
                datosJson[this.name] += ',' + this.value;
            }
        });
       
       
        // Mostramos el resultado
        console.log("Datos del paso a json:");
        console.log(datosJson);
        */
       
        /**          
        console.log("Datos con metodo stringify y substrayendo corchetes de inicio y final del string");
        // Pasar array de datos del formulario a string
        datosFormulario = JSON.stringify(datosFormulario);
        // eliminamos los corchetes de inicio y final
        datosFormulario = datosFormulario.substr(1, datosFormulario.length-1);
        datosFormulario = datosFormulario.substr(0, datosFormulario.length-1);
        console.log(datosFormulario);
        
        console.log("Cambiar los datos a formato Json");
        // Hay que quitar las comillas o algo así
        // Pruebas
        
                
        */
       
       
        /** Domingo 1 de abril 2018 a las 23:24 joras: Por ahora con esto no adelanto nada, por lo que voy a probar alguna otra opción para continuar con el proyecto.
        // Inicio de cabecera Ajax - datos necesarios para ejecución
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: datosJson,
            dataType: 'json',
            beforeSend: function() {
                $('#aceptar').prop("disabled", true);
                $('.fa-spinner').css('display','');
            }
        })
        // Opciones y operaciones según resultado del request
        .done(function(data, textStatus, jqXHR){
            console.log("Entrada de datos correcta");
            $.each(data, function(indice, valor){
                console.log(indice);
                console.log(valor);
            });
        })
        .fail(function(jqXHR, textStatus, errorThrown){
            console.log("Entrada de datos errónea");
            if(console && console.log) {
                console.log("La solicitud ha fallado: " + textStatus);
            }
        })
        .always(function(){
            setTimeout(function(){
                $('.fa-spinner').hide();
            $('#aceptar').prop("disabled", false);
            },500);
        });
        */
    });
});