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
    // Realizamos el proceso si pulsamos el botón SUBMIT del formulario con id="entrapp"
    $('#form_entrada').submit(function(evento) {
        // evento.preventDefault();
        // Deshabilitamos boton y mostramos efecto de espera
        $('#aceptar').prop('disabled', true);
        $('.fa-spinner').css('display', '');
        
        // Pasamos los datos a array 
        datosFormulario = $(this).serializeArray();
        // Incluimos en el array la información del tipo de proceso
        datosFormulario.push({"name": "proceso", "value": "login"});
        
        // Creamos objeto json para pasar el array a json
        var jsonDatos = {};
        // Recorremos el array para guardarlo en json
        $.each(datosFormulario, function(){
            if(typeof jsonDatos[this.name] == 'undefined') {
                jsonDatos[this.name] = this.value || '';
            } else {
                jsonDatos[this.name] += ',' + this.value;
            }
        });
        // Hacemos la petición Ajax con load(). Enviamos datos de jsonDatos para procesarlos en index.php
        $('#formulario_entrada').load('index.php', jsonDatos, function(responseTxt, statusTxt, xhr){
            if(statusTxt == 'success') {
                setTimeout(function(){
                    $('.fa-spinner').hide();
                    $('#aceptar').prop("disabled", false);
                },500);
            }
        });
    });
    
    // Realizamos el proceso si hacemos click en enlace ¿Olvidó su clave? del formulario con id="olv_contras"
    $('#olv_contras').click(function(){
        // Creamos json con la info del tipo de proceso
        var jsonDatos = {"proceso": "olvido"};
        
        // Hacemos la petición Ajax con load(). Enviamos datos de jsonDatos para procesarlos en index.php
        $('#formulario_entrada').load('index.php', jsonDatos, function(responseTxt, statusTxt, xhr) {
           if(statusTxt == 'success') {
               return false;
           }
        });
    });
    
    $('#form_comprobar_correo').submit(function() {
        alert("Pulsado Enviar");
    });
    
    $("input[name='volver']").click(function(){
        console.log("Holaaaaaaaaa a volver !!!!!!");
    });
    
    
    
    
    /**
    // Realizamos el proceso si pulsamos el botón SUBMIT del formulario con id="form_comprobar_correo"
    $('#form_comprobar_correo').submit(function(evento) {
        console.log("En proceso verificar email");
        evento.preventDefault();
        // Deshabilitamos los botones y mostramos efecto de espera
        $('#enviar').prop('disabled', true);
        $('.fa-spinner').css('display', '');
        
        // Pasamos los datos a array 
        datosFormulario = $(this).serializeArray();
        console.log(datosFormulario);
        // Incluimos en el array la información del tipo de proceso
        //if(datosFormulario[] )
        datosFormulario.push({"name": "proceso", "value": "comprobarEmail"});
        
        // Creamos objeto json para pasar el array a json
        var jsonDatos = {};
        // Recorremos el array para guardarlo en json
        $.each(datosFormulario, function(){
            if(typeof jsonDatos[this.name] == 'undefined') {
                jsonDatos[this.name] = this.value || '';
            } else {
                jsonDatos[this.name] += ',' + this.value;
            }
        });
        
        // Hacemos la petición Ajax con load(). Enviamos datos de jsonDatos para procesarlos en index.php
        $('#formulario_entrada').load('index.php', jsonDatos, function(responseTxt, statusTxt, xhr){
            if(statusTxt == 'success') {
                setTimeout(function(){
                $('.fa-spinner').hide();
                $('#aceptar').prop("disabled", false);
                },500);
            }
        });
    });
    
    // Volvemos al formulario de entrada al pulsar el botón "Atrás" del formulario de petición de correo por olvido de clave
    $("input[name='atras']").click(function(evento){
        evento.preventDefault();
        console.log("Dentro de volver ATRAS");
    }); */
});

// ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO 
// ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO 
// ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO ANULADO 
/**
 * Esta parte está anulada después de 15 días de investigar o de equivocarme
$(document).ready(function() {
    // Ejemplo: Envio de datos con AJAX
    // Realizamos el proceso si pulsamos algún botón SUBMIT del formulario con id="entrapp"
    $('#form_entrada').submit(function(evento) {        
        // Nueva programación: 1/04/2018 a las 23:26
        // Revisar info de: https://www.w3schools.com/jquery/jquery_ajax_intro.asp
        // Ejemplo de este método: https://www.codigonexo.com/blog/programacion/javascript/formulario-con-ajax-y-jquery/
        evento.preventDefault();
        var formulario = this;
        //console.log("Objeto de formulario");
        //console.log(formulario);
        arrayFormulario = $(formulario).serializeArray();
        arrayFormulario.push({name: 'etiq', value: 'login'}); // Añadimos la identificación del proceso: login (entrada al sistema)
        //console.log("Array de formulario");
        //console.log(arrayFormulario);
        
        // Creamos objeto json
        var jsonDatos = {};
        // Recorremos el array para guardarlo en json
        $.each(arrayFormulario, function(){
            if(typeof jsonDatos[this.name] == 'undefined') {
                jsonDatos[this.name] = this.value || '';
            } else {
                jsonDatos[this.name] += ',' + this.value;
            }
        });
        console.log("Datos de jsonDatos:");
        console.log(jsonDatos);
        */
        /**
        // Enviamos datos por ajax (método 2)
        $.post('index.php', jsonDatos, function(resul) {
            $('#aceptar').prop('disabled', true);
            $('.fa-spinner').css('display', '');
            console.log(resul);
            if(resul == -1) {
                console.log('Correcto');
            } else {
                console.log('Error');
            }
        })
        .always(function() {
            setTimeout(function(){
            $('.fa-spinner').hide();
            $('#aceptar').prop("disabled", false);
            },500);
        }); // Fin método 2
        // Fin de la nueva programación
        */
        
        /**
        // Enviamos los datos por ajax (método 1)
        $.ajax({
            type: 'POST',
            url: 'index.php',
            data: jsonDatos,
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
    });
});
*/
// FIN ANULADO FIN ANULADO FIN ANULADO FIN ANULADO FIN ANULADO FIN ANULADO 
// FIN ANULADO FIN ANULADO FIN ANULADO FIN ANULADO FIN ANULADO FIN ANULADO 
// FIN ANULADO FIN ANULADO FIN ANULADO FIN ANULADO FIN ANULADO FIN ANULADO 