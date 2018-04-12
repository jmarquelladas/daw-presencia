<?php
/* Smarty version 3.1.29, created on 2018-04-10 17:39:02
  from "C:\xampp\htdocs\pry\daw-presencia\smarty\templates\eleper.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5accda965aebf2_96732169',
  'file_dependency' => 
  array (
    'a1f97c26f74950305cefa366930436375fd903a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pry\\daw-presencia\\smarty\\templates\\eleper.tpl',
      1 => 1523374232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5accda965aebf2_96732169 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--
Descripción: Opciones de usuario Empleado
Versión: 1.0
Fecha inicio: 08/01/2018
Fecha final: 10/04/2018
Autor: José Miguel Arquelladas
Email: jmaruiz@gmail.com
Twitter: @jmarquelladas
-->

<!-- Formulario de para seleccionar el perfil a elegir ( Gestor o Empleado) -->
<div class="w3-row">
    <div class="w3-container w3-metro-dark-blue">
        <div class="w3-row">
            <div class="w3-col" style="width:60px">
                <i class="fa fa-user fa-3x" aria-hidden="true"></i>
            </div>
            <div class="w3-rest w3-container">
                <h4>Perfil de usuario</h4>
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
</div><?php }
}
