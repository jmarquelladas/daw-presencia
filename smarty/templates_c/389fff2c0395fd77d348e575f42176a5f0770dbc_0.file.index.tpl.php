<?php
/* Smarty version 3.1.29, created on 2018-04-03 18:23:39
  from "C:\xampp\htdocs\pry\daw-presencia\smarty\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ac3aa8b63c081_91368343',
  'file_dependency' => 
  array (
    '389fff2c0395fd77d348e575f42176a5f0770dbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pry\\daw-presencia\\smarty\\templates\\index.tpl',
      1 => 1522772126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac3aa8b63c081_91368343 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--
Descripción: Inicio de aplicación - Registro entrada de usuario y otras opciones
Versión: 1.0
Fecha inicio: 03/10/2017
Fecha final: 
Autor: José Miguel Arquelladas
Email: jmaruiz@gmail.com
Twitter: @jmarquelladas
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>DAW-Presencia - Entrada a la aplicación.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Habrá que modificar la ruta de los archivos javascript para cuando se suba al servidor o incluir el código -->
    <?php echo '<script'; ?>
 type="text/javascript" src="/pry/daw-presencia/js/funciones.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!-- Cabecera -->
    <header class="w3-container w3-metro-dark-blue">
        <h4 class="w3-center">DAW - Presencia</h4>
    </header>
    <!-- Formulario de entrada -->
    <div class="w3-row">
        <div class="w3-third w3-container"></div>
        <div class="w3-third w3-container">
            <div class="w3-center">
                <img src="./img/logo100.png" alt="Logo Empresa" class="w3-image w3-padding-16" style="width: 75px;">
            </div>
            <div class="w3-container w3-metro-dark-blue">
                <div class="w3-row">
                    <div class="w3-col" style="width:60px">
                        <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="w3-rest w3-container">
                        <h4>Inicie sesión para acceder</h4>
                    </div>
                </div>
            </div>
            <!--
            <form id="entrapp" name="entrapp" action="index.php" method="post" class="w3-container w3-card-4">
            -->
            <form method="post" id="form_entrada" class="w3-container w3-card-4">
                <p>
                    <input type="text" name="usuario" class="w3-input" required>
                    <label>Nombre de usuario</label></p>
                <p>
                    <input type="password" name="contras" class="w3-input" required>
                    <label>Contraseña</label></p>
                <p>
                    <input type="checkbox" name="sesion" class="w3-check" checked="checked">
                    <label>No cerrar la sesión</label></p>
                <p>
                    <input id="aceptar" type="submit" name="aceptar" value=" Aceptar " class="w3-button w3-section w3-metro-dark-blue w3-ripple">
                    <i class="fa fa-spinner fa-spin" style="font-size:24px; display: none;"></i><br/>
                    <a id="olv_contras" class="help-block" href="javascript:void(0)">¿ Olvidó la contraseña ?</a></p> <!-- Falta redireccionar para resetear contraseña -->
            </form>
            <br/>
            <span id="mensajeDatos"></span>
        </div>
        <div class="w3-third w3-container"></div>
    </div>
    <!-- Pié de página -->
    <footer class="w3-container w3-center">
        <hr>
        <p class="w3-opacity w3-tiny">2017-2018 José Miguel Arquelladas Ruiz.<br/>Proyecto DAW.</p>
    </footer>
</body>
</html><?php }
}
