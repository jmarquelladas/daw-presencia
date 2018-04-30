<?php
/*
Descripción: Inicio de aplicación - Registro entrada de usuario y otras opciones
Versión: 1.0
Fecha inicio: 03/10/2017
Fecha final: 
Autor: José Miguel Arquelladas
Email: jmaruiz@gmail.com
Twitter: @jmarquelladas
*/

// Carga de clases obligatorias
require_once 'DB.php';

// Realizamos la carga de la librería Smarty.
require_once('Smarty.class.php');

// Creamos el nuevo objeto Smarty y configuramos las 
// rutas de los directorios de smarty
$smarty = new Smarty;
$smarty->template_dir = "./smarty/templates";
$smarty->compile_dir = "./smarty/templates_c";
$smarty->config_dir = "./smarty/configs";
$smarty->cache_dir = "./smarty/cache";

// Inicio de formulario de inicio de aplicación - Registro entrada de usuario y otras opciones
if(isset($_REQUEST['proceso'])) {
    echo "Respuesta desde index2.php";
} else { // No se ha pulsado aún ninguna opción, mostramos página inicial ya que estamos iniciando la aplicación.
    session_start();
    unset($_SESSION['usuarios']['usuario']);
    unset($_SESSION['usuarios']['inicio']);
    session_destroy();
    $smarty->display('index.tpl');
}

?>