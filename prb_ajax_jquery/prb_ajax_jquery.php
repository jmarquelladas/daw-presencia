<!DOCTYPE html>
<?php

/*
 * Descripción: Código de pruebas Ajax y JQuery en PHP
 * Versión: 1.0
 * Fecha inicio: 22/03/2018
 * Fecha final:
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Prueba Ajax-JQuery en PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="w3-container">
        <h3>Pruebas Ajax-JQuery en PHP</h3>
    </div>
    <div class="w3-container">
        <p id="parrafo">Ejemplo de párrafo</p>
        <button>Pulsar para cambiar el texto con el contenido del fichero a sustituir después de pulsar en botón.</button>
    </div>
    <footer></footer>
    <!-- Script JQuery para AJAX -->
    <script type="text/javascript">
        $(document).ready(function(){
            // Ejemplo 1: Carga el contenido del fichero demotest.txt en el elemento con id="parrafo"
            $("button").click(function(){
                $("#parrafo").load("demotest.txt");
            });
            
            // Ejemplo 2:
            $("#resultadoSuma").click(function(){
                
            });
            
        });
    </script>
</body>
</html>