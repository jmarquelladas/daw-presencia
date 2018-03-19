/*
 * Descripción: Código jquery para gestor.tpl
 * Versión: 1.0
 * Fecha inicio: 21/01/2018
 * Fecha final:
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

$(document).ready(function() {
        
    /* Comentario del evento */
    $('#menu_ini' ).click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#titulo').text('Inicio')
        $('#opc_ini').show();
    });
        
    /* Comentario del evento */
    $('#menu_emp, #menu_emp_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#titulo').text('Empleados')
        $('#opc_emp').show();
    });
        
    /* Comentario del evento */
    $('#menu_sol, #menu_sol_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#titulo').text('Solicitudes')
        $('#opc_sol').show();
    });
        
    /* Comentario del evento */
    $('#menu_pre, #menu_pre_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#titulo').text('Control de presencia')
        $('#opc_pre').show();
    });
        
    /* Comentario del evento */
    $('#menu_cal, #menu_cal_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#titulo').text('Calendarios')
        $('#opc_cal').show();
    });
        
    /* Comentario del evento */
    $('#menu_tur_jor, #menu_tur_jor_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#titulo').text('Jornadas y Turnos')
        $('#opc_tur_jor').show();
    });
        
    /* Comentario del evento */
    $('#menu_par, #menu_par_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#titulo').text('Parámetros generales')
        $('#opc_par').show();
    });
        
    /* Comentario del evento */
    $('#camPosiV_cal').click(function(){
        $('#calHoriz').hide();
        $('#calVerti').show();
    });
        
    /* Comentario del evento */
    $('#camPosiH_cal').click(function(){
        $('#calVerti').hide();
        $('#calHoriz').show();
    });
        
    /* Comentario del evento */
    $('#camPosiV_tur_jor').click(function(){
        $('#jor_turHoriz').hide();
        $('#jor_turVerti').show();
    });
        
    /* Comentario del evento */
    $('#camPosiH_tur_jor').click(function(){
        $('#jor_turVerti').hide();
        $('#jor_turHoriz').show();
    });
        
    /* Comentario del evento */
    $('#are_apar').click(function(){
        if($('#con_are').hasClass('w3-hide')) { // Si está oculto
            // ocultamos los demas elementos de la clase configuraciones
            $('.configuraciones').each(function(){
                $(this).removeClass("w3-show");
                $(this).addClass("w3-hide");
            });
            // mostramos el contenido del apartado
            $('#con_are').removeClass("w3-hide");
            $('#con_are').addClass("w3-show");
        } else { // Está mostrandose el contenido
            // Lo ocultamos automáticamente
            $('#con_are').removeClass("w3-show");
            $('#con_are').addClass("w3-hide");
        }
    });
        
    /* Comentario del evento */
    $('#per_apar').click(function(){
        if($('#con_per').hasClass('w3-hide')) { // Si está oculto
            // ocultamos los demas elementos de la clase configuraciones
            $('.configuraciones').each(function(){
                $(this).removeClass("w3-show");
                $(this).addClass("w3-hide");
            });
            // mostramos el contenido del apartado
            $('#con_per').removeClass("w3-hide");
            $('#con_per').addClass("w3-show");
        } else { // Está mostrandose el contenido
            // Lo ocultamos automáticamente
            $('#con_per').removeClass("w3-show");
            $('#con_per').addClass("w3-hide");
        }
    });
        
    /* Comentario del evento */
    $('#rol_apar').click(function(){
        if($('#con_rol').hasClass('w3-hide')) { // Si está oculto
            // ocultamos los demas elementos de la clase configuraciones
            $('.configuraciones').each(function(){
                $(this).removeClass("w3-show");
                $(this).addClass("w3-hide");
            });
            // mostramos el contenido del apartado
            $('#con_rol').removeClass("w3-hide");
            $('#con_rol').addClass("w3-show");
        } else { // Si está mostrandose el contenido
            // Lo ocultamos automáticamente
            $('#con_rol').removeClass("w3-show");
            $('#con_rol').addClass("w3-hide");
        }
    });
        
    /* Comentario del evento */
    $('#log_apar').click(function(){
        if($('#con_log').hasClass('w3-hide')) { // Si está oculto
            // ocultamos los demas elementos de la clase configuraciones
            $('.configuraciones').each(function(){
                $(this).removeClass("w3-show");
                $(this).addClass("w3-hide");
            });
            // mostramos el contenido del apartado
            $('#con_log').removeClass("w3-hide");
            $('#con_log').addClass("w3-show");
        } else { // Está mostrandose el contenido
            // Lo ocultamos automáticamente
            $('#con_log').removeClass("w3-show");
            $('#con_log').addClass("w3-hide");
        }
    });
});