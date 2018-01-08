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
        <h2>DAW - Presencia</h2>
    </header>
    
    <!-- Formulario de entrada -->
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
                        <h3>Inicie sesión para acceder</h3>
                    </div>
                </div>
            </div>
            <form id="entrapp" name="entrapp" action="index.php" method="post" class="w3-container w3-card-4">
                <p>
                    <input type="text" name="usuario" class="w3-input" required>
                    <label>Nombre de usuario</label></p>
                <p>
                    <input type="password" name="contras" class="w3-input" required>
                    <label>Contraseña</label></p>
                <p>
                    <input type="checkbox" name="no_cerrar_sesion" class="w3-check" checked="checked">
                    <label>No cerrar la sesión</label></p>
                <p>
                    <input type="submit" name="aceptar" value=" Aceptar " class="w3-button w3-section w3-metro-dark-blue w3-ripple"><br/>
                    <a class="help-block" href="#">¿ Olvidó la contraseña ?</a></p> <!-- Falta redireccionar para resetear contraseña -->
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
</html>