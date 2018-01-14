<?php
/* Smarty version 3.1.29, created on 2018-01-14 10:58:48
  from "C:\xampp\htdocs\pry\daw-presencia\smarty\templates\eleper.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5b29d836a0c2_08349471',
  'file_dependency' => 
  array (
    'a1f97c26f74950305cefa366930436375fd903a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pry\\daw-presencia\\smarty\\templates\\eleper.tpl',
      1 => 1515871204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b29d836a0c2_08349471 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--
Descripción: Opciones de usuario Empleado
Versión: 1.0
Fecha inicio: 08/01/2018
Fecha final: 
Autor: José Miguel Arquelladas
Email: jmaruiz@gmail.com
Twitter: @jmarquelladas
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>DAW-Presencia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Cabecera -->
    <header class="w3-container w3-metro-dark-blue">
        <h3 class="w3-center">DAW - Presencia</h3>
    </header>
    <!-- Formulario de para seleccionar el perfil a elegir ( Gestor o Empleado) -->
    <div class="w3-row">
        <div class="w3-quarter w3-container"></div>
        <div class="w3-container w3-half">
            <div class="w3-center">
                <img src="./img/logo100.png" alt="Logo Empresa" class="w3-image w3-padding-16">
            </div>
            <div class="w3-container w3-metro-dark-blue">
                <div class="w3-row">
                    <div class="w3-col" style="width:60px">
                        <i class="fa fa-user fa-4x" aria-hidden="true"></i>
                    </div>
                    <div class="w3-rest w3-container">
                        <h3>Perfil de usuario</h3>
                    </div>
                </div>
            </div>
            <form id="selperfil" name="selperfil" action="./eleper.php" method="post" class="w3-container w3-card-4">
                <div class="w3-container w3-center">
                    <br/>
                    <p>
                        <input type="radio" name="perfil" value="perfil_gestor" class="w3-radio" checked> <!-- Perfil gestor (por defecto) -->
                        <label>Gestor de la aplicación</label>
                    </p>
                    <p>
                        <input type="radio" name="perfil" value="perfil_empleado" class="w3-radio"> <!-- Perfil empleado -->
                        <label>Empleado de la empresa</label>
                    </p>
                    <p>
                        <input type="submit" name="aceptar" value=" Aceptar " class="w3-button w3-section w3-metro-dark-blue w3-ripple">
                        <input type="submit" name="aceptar" value=" Salir " class="w3-button w3-section w3-metro-dark-blue w3-ripple">
                    </p>
                </div>
            </form>
        </div>
        <div class="w3-quarter w3-container"></div>
    </div>
    <!-- Pié de página -->
    <footer class="w3-container w3-center">
        <hr/>
        <p class="w3-opacity w3-tiny">2017-2018 José Miguel Arquelladas Ruiz.<br/>Proyecto DAW.</p>
    </footer>
</body>
</html><?php }
}
