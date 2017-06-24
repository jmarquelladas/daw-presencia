<!DOCTYPE html>
<!--
Descripción:
Versión - Fecha: 1.1
Autor: José Miguel Arquelladas
Email: jmaruiz@gmail.com
Twitter: @jmarquelladas
-->

<?php

// Carga de clases obligatorias
require_once 'DB.php';

if(BD::conectaBD('root', 'gr8814am', 'dawpresencia')) { // Se ha conectado correctamente a la BD
    echo '<p>Correcto</p>';
} else { // No se ha realizado la conexión a BD
    echo '<p>IN Correcto</p>';
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>DAW-Presencia - Entrada.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header class="w3-container w3-blue">
            <h1>DAW - Presencia</h1>
        </header>

        <div class="w3-row">
            <div class="w3-quarter w3-container"></div>
            <div class="w3-container w3-half w3-margin-top">
                <div class="w3-center">
                    <img src="./include/img/logo100.png" alt="Logo Empresa" class="w3-image w3-padding-16">
                </div>
                <div class="w3-container w3-blue">
                    <div class="w3-row">
                        <div class="w3-col" style="width:60px">
                            <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest w3-container">
                            <h3>Inicie sesión para acceder</h3>
                        </div>
                    </div>
                </div>
                <form class="w3-container w3-card-4">

                    <p>
                        <input class="w3-input" type="text" required>
                        <label>Nombre de usuario</label></p>
                    <p>
                        <input class="w3-input" type="password" required>
                        <label>Contraseña</label></p>
                    <p>
                        <input id="milk" class="w3-check" type="checkbox" checked="checked">
                        <label>No cerrar la sesión</label></p>
                    <p>
                        <button class="w3-button w3-section w3-blue w3-ripple"> Aceptar </button><br/>
                        <a class="help-block" href="#">¿ Olvidó la contraseña ?</a></p>

                </form>
            </div>
            <div class="w3-quarter w3-container"></div>
        </div>
    </body>
</html>