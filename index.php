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
    // Realizar el proceso de entrada a la aplicación
    if($_REQUEST['proceso'] == 'login') {
        if($_REQUEST['usuario'] !== '') {
            // Comprobamos si el usuario es correcto
            // Si es correcto lanzamos la aplicación segú el perfil del usuario
            // Volcamos campos a variables para comprobar credenciales
            $usuario = $_REQUEST['usuario'];
            $contras = $_REQUEST['contras'];
            // Comprobación de credenciales en la BD
            $datosAutenticacion = DB::verificaUsuario($usuario, $contras);
            if(is_array($datosAutenticacion)) { // El resultado de la comprobación es correcto.
                session_start(); // Iniciamos la sesion de usuario
                $_SESSION['usuarios']['usuario'] = $_REQUEST['usuario'];
                $_SESSION['usuarios']['sesion']  = $_REQUEST['sesion'];
                $_SESSION['usuarios']['inicio']  = time();
                // Comprobamos también qué tipo de usuario habrá entrado a la aplicación
                if($datosAutenticacion['esgestor'] == 1) { // El usuario es Gestor General
                    $smarty->display('eleper.tpl'); // Plantilla de elección de perfil
                } else { // El usuario es del tipo Empleado
                    $smarty->display('empleado.tpl');
                }
            } else if(!($datosAutenticacion)){ // Las credenciales no son correctas, volvemos a realizar petición.
                $smarty->display('index.tpl');
            }
        }
    // Realizamos el proceso al hacer click en el mensaje "¿olvidó clave?"
    } else if($_REQUEST['proceso'] == 'olvido') {
        // El usuario ha olvidado su contraseña
        // Pedir en formulario el nombre de usuario o la cuenta de correo asociada
        $smarty->display('olvcon.tpl'); // Plantilla formulario
    // Consultar la BD y enviar mensaje si no existe usuario o contraseña o enviado mostrar formulario para restablecer clave
    } else if($_REQUEST['proceso'] == 'comprobarEmail') {
        echo 'ComprobarEmail';
    }
} else { // No se ha pulsado aún ninguna opción, mostramos página inicial ya que estamos iniciando la aplicación.
    session_start();
    unset($_SESSION['usuarios']['usuario']);
    unset($_SESSION['usuarios']['inicio']);
    session_destroy();
    $smarty->display('index.tpl');
}
?>