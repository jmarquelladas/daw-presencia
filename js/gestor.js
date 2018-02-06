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
    $('#menu_ini' ).click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#opc_ini').show();
    });

    $('#menu_emp, #menu_emp_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#opc_emp').show();
    });

    $('#menu_sol, #menu_sol_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#opc_sol').show();
    });

    $('#menu_pre, #menu_pre_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#opc_pre').show();
    });

    $('#menu_cal, #menu_cal_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#opc_cal').show();
    });

    $('#menu_tur_jor, #menu_tur_jor_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#opc_tur_jor').show();
    });

    $('#menu_par, #menu_par_sol').click(function(){
        $('.pestania').each(function(){
            $(this).hide();
        });
        $('#opc_par').show();
    });
});