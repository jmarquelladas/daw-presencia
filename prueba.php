<!DOCTYPE html>
<!--
Descripción:
Versión - Fecha: 1.0 
Autor: José Miguel Arquelladas
Email: jmaruiz@gmail.com
Twitter: @jmarquelladas
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include 'configuracion.php';
        
        $config = new Configuracion();
        
        echo '<p>'. $config->host .'</p>';
        ?>
    </body>
</html>
