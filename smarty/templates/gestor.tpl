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
    <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/pry/daw-presencia/js/gestor.js"></script> <!-- Habrá que modificarlo para cuando se suba al servidor o incluir el código -->
</head>
<body>
    <!-- Cabecera -->
    <header class="w3-container w3-metro-dark-blue">
        <h4 class="w3-center">DAW - Presencia</h4>
    </header>
    <div class="w3-row">
        <div class="w3-container">
            <div class="w3-container w3-twothird">
                <!-- Logo empresa -->
                <img src="./img/logo100.png" alt="Logo Empresa" class="w3-image w3-padding-16" style="width: 75px;">
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
                <a id="menu_ini" class="w3-bar-item w3-button w3-mobile">Inicio</a>
                <a id="menu_emp" class="w3-bar-item w3-button w3-mobile">Empleados</a>
                <a id="menu_sol" class="w3-bar-item w3-button w3-mobile">Solicitudes</a>
                <a id="menu_pre" class="w3-bar-item w3-button w3-mobile">Presencia</a>
                <a id="menu_cal" class="w3-bar-item w3-button w3-mobile">Calendarios</a>
                <a id="menu_tur_jor" class="w3-bar-item w3-button w3-mobile">Turnos y Jornadas</a>
                <a id="menu_par" class="w3-bar-item w3-button w3-mobile">Parámetros generales</a>
            </div>
        </div>
        <div id="cont_prin" class="w3-container">
            <!-- Contenido principal -->
            <div id="opc_ini" class="w3-row pestania" style="height: 550px;">  <!-- Opción inicio -->
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
            
            
            <!-- POR AQUI VOY *************************************************
            ****************************************************************-->
            <div id="opc_emp" class="w3-row pestania" style="height: 600px; display: none;"> <!-- Opción mantenimiento de empleados -->
                <div class="w3-panel">
                    <div class="w3-row-padding">
                        <div class="w3-twothird">
                            <div class="w3-half">
                                <div class="w3-row-padding">
                                    <div class="w3-half">
                                        <button class="w3-button w3-padding-16 w3-metro-dark-blue w3-round" style="width: 200px;">Nuevo Empleado</button>
                                    </div>
                                    <div class="w3-half">
                                        <div class="w3-dropdown-hover">
                                            <button class="w3-button w3-padding-16 w3-metro-dark-blue w3-round" style="width: 200px;">Más opciones</button>
                                            <div class="w3-dropdown-content w3-bar-block w3-border">
                                                <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Modificar</a>
                                                <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Justificar</a>
                                                <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w3-half">
                                <div class="w3-row-padding">
                                    <input type="text" class="w3-input w3-border w3-round" placeholder="Buscar ...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w3-panel">
                    <table class="w3-table-all">
                        <thead>
                            <tr class="w3-grey">
                                <th>Selec</th>
                                <th>DNI</th>
                                <th>Apellidos y Nombre</th>
                                <th>Antigüedad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Si/No</td>
                                <td>74747474D</td>
                                <td>Juan Gómez Sánchez</td>
                                <td>05/03/1981</td>
                            </tr>
                            <tr>
                                <td>Si/No</td>
                                <td>74747474D</td>
                                <td>Juan Gómez Sánchez</td>
                                <td>05/03/1981</td>
                            </tr>
                            <tr>
                                <td>Si/No</td>
                                <td>74747474D</td>
                                <td>Juan Gómez Sánchez</td>
                                <td>05/03/1981</td>
                            </tr>
                            <tr>
                                <td>Si/No</td>
                                <td>74747474D</td>
                                <td>Juan Gómez Sánchez</td>
                                <td>05/03/1981</td>
                            </tr>
                            <tr>
                                <td>Si/No</td>
                                <td>74747474D</td>
                                <td>Juan Gómez Sánchez</td>
                                <td>05/03/1981</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
            
            <div id="opc_sol" class="w3-row pestania" style="height: 600px; display: none;"> <!-- Opción gestión de solicitudes -->
                <div class="w3-panel">
                    <div class="w3-row-padding">
                        <div class="w3-twothird">
                            <div class="w3-padding-small w3-quarter">
                                <select class="w3-select w3-border w3-round w3-small" name="tipoSolic">
                                    <option value="" disabled selected>Tipo</option>
                                    <option value="vacac">Vacaciones</option>
                                    <option value="medic">Médico</option>
                                    <option value="otros">Otros...</option>
                                </select>
                            </div>
                            <div class="w3-padding-small w3-quarter">
                                <select class="w3-select w3-border w3-round w3-small" name="estSolic">
                                    <option value="" disabled selected>Estado</option>
                                    <option value="entramite">En trámite</option>
                                    <option value="aprobada">Aprobada</option>
                                    <option value="denegada">Denegada</option>
                                </select>
                            </div>
                            <div class="w3-padding-small w3-quarter">
                                <input type="date" class="w3-input w3-border w3-round w3-small" placeholder="Desde">
                            </div>
                            <div class="w3-padding-small w3-quarter">
                                <input type="date" class="w3-input w3-border w3-round w3-small" placeholder="Hasta">
                            </div>
                        </div>
                        <div class="w3-third">
                            <div class="w3-padding-small w3-half">
                                <input type="text" class="w3-input w3-border w3-round-large w3-small" placeholder="Buscar ...">
                            </div>
                            <div class="w3-padding-small w3-half"></div>
                        </div>
                    </div>
                </div>
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
</html>