<?php

/* 
 * Descripción:
 * Versión - Fecha: 1.0 
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

$proceso = $_REQUEST['etiq'];

if(isset($proceso) && $proceso !== '') {
    if($proceso == 'login') {
        if($_REQUEST['usuario'] === 'soldier')
            echo TRUE;
        echo FALSE;
    }
}


















?>