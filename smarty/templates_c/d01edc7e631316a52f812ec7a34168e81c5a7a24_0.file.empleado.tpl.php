<?php
/* Smarty version 3.1.29, created on 2018-01-10 17:11:30
  from "C:\xampp\htdocs\pry\daw-presencia\smarty\templates\empleado.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a563b324ff295_79957161',
  'file_dependency' => 
  array (
    'd01edc7e631316a52f812ec7a34168e81c5a7a24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pry\\daw-presencia\\smarty\\templates\\empleado.tpl',
      1 => 1515600661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a563b324ff295_79957161 ($_smarty_tpl) {
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
    <title>DAW-Presencia - Entrada a la aplicación.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Cabecera -->
    <header class="w3-container w3-metro-dark-blue">
        <h2>DAW - Presencia - Opciones de Empleado</h2>
    </header>
    
    <!-- Formulario de entrada -->
    <div class="w3-row">
        <div class="w3-quarter w3-container"></div>
        <div class="w3-container w3-half">
            <form id="selperfil" name="otroselperfil" action="./noseque.php" method="post" class="w3-container w3-card-4">
                <p>
                    <input type="submit" name="aceptar" value=" Aceptar " class="w3-button w3-section w3-metro-dark-blue w3-ripple">
                </p>
            </form>
        </div>
        <div class="w3-quarter w3-container"></div>
    </div>
    <!-- Pié de página -->
    <footer class="w3-container w3-center">
        <hr>
        <p class="w3-opacity w3-tiny">2017-2018 José Miguel Arquelladas Ruiz. Proyecto DAW.</p>
    </footer>
</body>
</html><?php }
}
