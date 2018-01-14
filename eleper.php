<?php
/*
Descripción: Inicio de aplicación - Registro entrada de usuario y otras opciones
Versión: 1.0
Fecha inicio: 11/01/2018
Fecha final: 
Autor: José Miguel Arquelladas
Email: jmaruiz@gmail.com
Twitter: @jmarquelladas
*/

// Carga de clases obligatorias


// Realizamos la carga de la librería Smarty.
require_once('Smarty.class.php');

// Creamos el nuevo objeto Smarty y configuramos las 
// rutas de los directorios de smarty
$smarty = new Smarty;
$smarty->template_dir = "./smarty/templates";
$smarty->compile_dir = "./smarty/templates_c";
$smarty->config_dir = "./smarty/configs";
$smarty->cache_dir = "./smarty/cache";

// Inicio de formulario de selección de perfil de usuario
// Comprobaciones
if(isset($_REQUEST['aceptar'])) {
    if($_REQUEST['aceptar'] == ' Aceptar ') {
        $perfil = $_REQUEST['perfil'];
        if($perfil == 'perfil_gestor') {// El usuario es del tipo Gestor
            $smarty->display('gestor.tpl');
        } else if($perfil == 'perfil_empleado') { // El usuario es del tipo Empleado
            $smarty->display('empleado.tpl');
        }
    } else if($_REQUEST['aceptar'] == ' Salir ') {
        header('location: ./index.php');
    }    
}