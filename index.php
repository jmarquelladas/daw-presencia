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

//echo 'Nombre usuario: '. $_REQUEST['usuario'];
//return -1;


// Inicio de formulario de inicio de aplicación - Registro entrada de usuario y otras opciones
// Comprobaciones
if(!isset($_REQUEST['aceptar'])) { // No se ha pulsado aún ninguna opción, mostramos página inicial.
    session_start();
    unset($_SESSION['usuarios']['usuario']);
    unset($_SESSION['usuarios']['inicio']);
    session_destroy();
    $smarty->display('index.tpl');
} else {
    
    if(isset($_REQUEST['usuario'])) var_dump($_REQUEST['usuario']);
    
    return -1;
    
    /** Quitado por el momento
    $proceso = $_REQUEST['etiq'];
    if($proceso == 'login') {
        // Volcamos campos a variables para comprobar credenciales
        $usuario = $_REQUEST['usuario'];
        $contras = $_REQUEST['contras'];
        // Comprobación de credenciales en la BD
        $datosAutenticacion = DB::verificaUsuario($usuario, $contras);
        if(is_array($datosAutenticacion)) { // El resultado de la comprobación es correcto.
            session_start(); // Iniciamos la sesion de usuario
            $_SESSION['usuarios']['usuario'] = $_REQUEST['usuario'];
            $_SESSION['usuarios']['inicio'] = time();
            // Comprobamos también qué tipo de usuario habrá entrado a la aplicación
            if($datosAutenticacion['esgestor'] == 1) { // El usuario es Gestor General
                $smarty->display('eleper.tpl'); // Plantilla de elección de perfil
            } else { // El usuario es del tipo Empleado
                $smarty->display('empleado.tpl');
            }
        } else if(!($datosAutenticacion)){ // Las credenciales no son correctas, volvemos a realizar petición.
            $smarty->display('index.tpl');
        }
    } Fin de quitado por el momento */
}
?>