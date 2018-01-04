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
// Comprobaciones
if(isset($_REQUEST['aceptar']) && (¡empty($_REQUEST['usuario']))) { // Se ha pulsado el boton de aceptar entrada de usuario y el campo no está vacío
    // Volcamos campos a variables para comprobar credenciales
    $usuario = $_REQUEST['usuario'];
    $contras = $_REQUEST['contras'];
    // Comprobación de credenciales en la BD
    if(DB::verificaUsuario($usuario, $contras)) {
        // El resultado de la comprobación es correcto.
        // Comprobamos también que tipo de usuario habrá entrado a la aplicación
        
        // Si es usuario Gestor General
        $smarty->assign('mensaje','');
        $smarty->assign('opcion','');
        $smarty->display('gestor.tpl');
        
        // Si es usuario es Empleado
        $smarty->assign('mensaje','');
        $smarty->assign('opcion','');
        $smarty->display('empleado.tpl');
    } else {
        // Las credenciales no son correctas, volvemos a realizar petición.
    $smarty->assign('mensaje','');
    $smarty->assign('opcion','entrada');
    $smarty->display('index.tpl');
    }
} else { // No se ha pulsado aún ninguna opción, mostramos página inicial.
    $smarty->assign('mensaje','');
    $smarty->assign('opcion','entrada');
    $smarty->display('index.tpl');
}
?>