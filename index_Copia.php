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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php
// Carga de clases obligatorias
require_once 'DB.php';
// Conectamos con la BD
$conexion = DB::conectaDB();
// Comprobamos atributos. Comentar si no es necesario utilizar.
//echo '<p>' .$conexion->getAttribute(PDO::ATTR_CLIENT_VERSION). '</p>';
//echo '<p>' .$conexion->getAttribute(PDO::ATTR_CONNECTION_STATUS). '</p>';
?>

<body>
    <header class="w3-container w3-blue">
        <h1>DAW - Presencia</h1>
    </header>

    <div class="w3-row">
        <div class="w3-quarter w3-container"></div>
        <div class="w3-container w3-half">
            <div class="w3-center">
                <img src="./img/logo100.png" alt="Logo Empresa" class="w3-image w3-padding-16">
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
    <footer>
        <p>2017-2018 José Miguel Arquelladas. DAW-Presencia v 1.0 build 2018.01.01.1931</p>
    </footer>
</body>
</html>