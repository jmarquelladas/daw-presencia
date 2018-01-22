<?php
/* Smarty version 3.1.29, created on 2018-01-22 20:40:27
  from "C:\xampp\htdocs\pry\daw-presencia\smarty\templates\gestor.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a663e2b649135_97730224',
  'file_dependency' => 
  array (
    'ed03680963cf9e1d0863a14428cf1a9a236c3905' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pry\\daw-presencia\\smarty\\templates\\gestor.tpl',
      1 => 1516650024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a663e2b649135_97730224 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--
Descripción: Opciones de usuario Gestor
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
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/pry/daw-presencia/js/gestor.js"><?php echo '</script'; ?>
> <!-- Habrá que modificarlo para cuando se suba al servidor o incluir el código -->
</head>
<body>
    <!-- Cabecera -->
    <header class="w3-container w3-metro-dark-blue">
        <h3 class="w3-center">DAW - Presencia</h3>
    </header>
    <div class="w3-row">
        <div class="w3-container">
            <div class="w3-container w3-twothird">
                <!-- Logo empresa -->
                <img src="./img/logo100.png" alt="Logo Empresa" class="w3-image w3-padding-16">
            </div>
            <div class="w3-container w3-third">
                <!-- Datos sesion -->
                <div class="w3-display-container" style="height:99px;">
                    <div class="w3-display-topright">
                        <buttom class="w3-button w3-metro-dark-blue w3-tiny"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Mi cuenta</buttom>
                        <buttom class="w3-button w3-metro-dark-blue w3-tiny"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Salir</buttom>
                    </div>
                    <div class="w3-display-bottomright w3-tiny">
                        <p><b>Fecha y hora oficial:</b> 14/01/2018 - 11:57<br/><b>Usuario:</b> José Miguel Arquelladas Ruiz<br/><b>Telf. Soporte:</b> 967304866</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-container">
            <!-- Menú opciones generales -->
            <div class="w3-bar w3-metro-dark-blue">
                <a id="menu_ini" class="w3-bar-item w3-button">Inicio</a>
                <a id="menu_emp" class="w3-bar-item w3-button">Empleados</a>
                <a id="menu_sol" class="w3-bar-item w3-button">Solicitudes</a>
                <a id="menu_pre" class="w3-bar-item w3-button">Presencia</a>
                <a id="menu_cal" class="w3-bar-item w3-button">Calendarios</a>
                <a id="menu_tur_jor" class="w3-bar-item w3-button">Turnos y Jornadas</a>
                <a id="menu_par" class="w3-bar-item w3-button">Parámetros generales</a>
            </div>
        </div>
        <div id="cont_prin" class="w3-container">
            <!-- Contenido principal -->
            <div id="opc_ini" class="w3-row pestania" style="height: 600px;">  <!-- Opción inicio -->
                <!-- Últimas Solicitudes -->
                <div class="w3-half">
                    <div class="w3-panel">
                        <h4 class="w3-center w3-metro-dark-blue">Últimas solicitudes</h4>
                        <div class="w3-responsive">
                            <table class="w3-table-all w3-hoverable w3-small">
                                <thead>
                                    <tr class="w3-grey">
                                        <th>Fecha</th>
                                        <th>Empleado</th>
                                        <th>Descripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>Juan Gómez Sánchez</td>
                                        <td>Asuntos propios</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Últimas Ausencias -->
                <div class="w3-half">
                    <div class="w3-panel">
                        <h4 class="w3-center w3-metro-dark-blue">Últimas ausencias</h4>
                        <div class="w3-responsive">
                            <table class="w3-table-all w3-hoverable w3-small">
                                <thead>
                                    <tr class="w3-grey">
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Empleado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                    <tr>
                                        <td>14/01/2018</td>
                                        <td>17:11</td>
                                        <td>Juan Gómez Sánchez</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="opc_emp" class="w3-row pestania" style="height: 600px; display: none;"> <!-- Opción mantenimiento de empleados -->
                <button class="w3-button w3-padding-16 w3-metro-dark-blue w3-round" style="width: 200px;">Nuevo Empleado</button>
                <div class="w3-dropdown-hover">
                    <button class="w3-button w3-padding-16 w3-metro-dark-blue w3-round" style="width: 200px;">Más opciones</button>
                    <div class="w3-dropdown-content w3-bar-block w3-border">
                        <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Modificar</a>
                        <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Justificar</a>
                        <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Cancelar</a>
                    </div>
                </div>
                <input type="text" class="w3-input w3-border w3-round" placeholder="Buscar ...">
                
                <!--
                <div class="w3-panel w3-twothird">
                    <div class="w3-third">
                        <button class="w3-button w3-padding-16 w3-metro-dark-blue w3-round" style="width: 200px;">Nuevo Empleado</button>
                    </div>
                    <div class="w3-third">
                        <div class="w3-dropdown-hover">
                            <button class="w3-button w3-padding-16 w3-metro-dark-blue w3-round" style="width: 200px;">Más opciones</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Modificar</a>
                                <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Justificar</a>
                                <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Cancelar</a>
                            </div>
                        </div>
                    </div>
                    <div class="w3-third">
                        <input type="text" class="w3-input w3-border w3-round" placeholder="Buscar ...">
                    </div>
                </div> -->
            </div> 
            
            <div id="opc_sol" class="w3-row pestania" style="height: 600px; display: none;"> <!-- Opción gestión de solicitudes -->
                <h3>Solicitudes</h3>
            </div>
            
            <div id="opc_pre" class="w3-row pestania" style="height: 600px; display: none;"> <!-- Opción control de presencia  -->
                <h3>Presencia</h3>
            </div>
            
            <div id="opc_cal" class="w3-row pestania" style="height: 600px; display: none;"> <!-- Opción mantenimiento de calendarios -->
                <h3>Calendarios</h3>
            </div>
            
            <div id="opc_tur_jor" class="w3-row pestania" style="height: 600px; display: none;"> <!-- Opción Turnos y Jornadas -->
                <h3>Turnos y Jornadas</h3>
            </div>
            
            <div id="opc_par" class="w3-row pestania" style="height: 600px; display: none;"> <!-- Opción parámetros generales -->
                <h3>Parámetros</h3>
            </div>
        </div>
    </div>
    <!-- Pié de página -->
    <footer class="w3-container">
        <hr>
        <div class="w3-row">
            <div class="w3-container w3-third">
                <p class="w3-opacity w3-tiny">2017-2018 José Miguel Arquelladas Ruiz</p>
            </div>
            <div class="w3-container w3-third w3-center">
                <p class="w3-opacity w3-tiny">Proyecto DAW</p>
            </div>
            <div class="w3-container w3-third w3-right-align">
                <p class="w3-opacity w3-tiny">AVISO LEGAL</p>
                <p class="w3-opacity w3-tiny">Ayuda | Danos tu opinión | Privacidad | Condiciones</p>
            </div>
        </div>
    </footer>
</body>
</html><?php }
}
