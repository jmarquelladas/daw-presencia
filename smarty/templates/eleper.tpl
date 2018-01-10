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
        <h2>DAW - Presencia - Elegir Perfil de usuario</h2>
    </header>
    
    <!-- Formulario de para seleccionar el perfil a elegir ( Gestor o Empleado) -->
    <div class="w3-row">
        <div class="w3-quarter w3-container"></div>
        <div class="w3-container w3-half">
            <form id="selperfil" name="selperfil" action="./eleper.php" method="post" class="w3-container w3-card-4">
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
</html>