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
    <title>DAW-Presencia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#solicitudes').click(function(){
                $('#pes_ini').show();
                $('#pes_cal').hide();
              });

            $('#calendario').click(function(){
                $('#pes_cal').show();
                $('#pes_ini').hide();
            });
        });
    </script>
    
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
            <!-- Pestañas opciones generales -->
            <div class="w3-bar w3-metro-dark-blue">
                <button id="solicitudes" class="w3-bar-item w3-button">Solicitudes</button>
                <button id="calendario" class="w3-bar-item w3-button">Calendario</button>
            </div>
        </div>
        <div id="pes_ini" class="w3-container" style="display: block;">
            <!-- Pestaña contenido Inicio -->
            <div class="w3-row" style="height: 562px;">
                <div class="w3-threequarter">
                    <div class="w3-panel">
                        <button class="w3-button w3-padding-16 w3-metro-dark-blue w3-round" style="width: 200px;">Nueva solicitud</button>
                        <div class="w3-dropdown-hover">
                            <button class="w3-button w3-padding-16 w3-metro-dark-blue w3-round" style="width: 200px;">Más opciones</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Modificar</a>
                                <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Justificar</a>
                                <a href="#" class="w3-bar-item w3-button w3-metro-dark-blue">Cancelar</a>
                            </div>
                        </div>
                    </div>
                    <div class="w3-panel">
                        <div class="w3-row">
                            <div class="w3-twothird">
                                <div class="w3-row-padding">
                                    <div class="w3-quarter">
                                        <select class="w3-select w3-border w3-round w3-small" name="tipoSolic">
                                            <option value="" disabled selected>Tipo</option>
                                            <option value="vacac">Vacaciones</option>
                                            <option value="medic">Médico</option>
                                            <option value="otros">Otros...</option>
                                        </select>
                                    </div>
                                    <div class="w3-quarter">
                                        <select class="w3-select w3-border w3-round w3-small" name="estSolic">
                                            <option value="" disabled selected>Estado</option>
                                            <option value="entramite">En trámite</option>
                                            <option value="aprobada">Aprobada</option>
                                            <option value="denegada">Denegada</option>
                                        </select>
                                    </div>
                                    <div class="w3-quarter">
                                        <select class="w3-select w3-border w3-round w3-small" name="compara">
                                            <option value="entramite">Con fecha...</option>
                                            <option value="aprobada">Antes de la fecha...</option>
                                            <option value="denegada">Después de la fecha...</option>
                                        </select>
                                    </div>
                                    <div class="w3-quarter">
                                        <input type="date" class="w3-input w3-border w3-round w3-small">
                                    </div>
                                </div>
                            </div>
                            <div class="w3-third">
                                <div class="w3-row">
                                    <input type="text" class="w3-input w3-border w3-round-large w3-small" placeholder="Descripción...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-panel w3-border-left" style="height: 532px;">
                        <form class="w3-container w3-card-4" action="" method="post" name="formRegPresencia">
                            <div class="w3-panel w3-metro-dark-blue w3-round w3-center">
                                <h4>Registro de Presencia</h4>
                            </div>
                            <div class="w3-panel w3-border w3-center">
                                <!-- <label class="w3-label">Fecha</label>-->
                                <h3><b>04/03/2017</b></h3>
                            </div>
                            <div class="w3-panel w3-border w3-center">
                                <!-- <label class="w3-label">Hora</label>-->
                                <h3><b>09:58:36</b></h3>
                            </div>
                            <div class="w3-panel">
                                <select class="w3-select w3-border w3-round" name="tipoSolic">
                                    <option value="" disabled selected>Tipo</option>
                                    <option value="vacac">Vacaciones</option>
                                    <option value="medic">Médico</option>
                                    <option value="otros">Otros...</option>
                                </select>
                            </div>
                            <div class="w3-panel">
                                <textarea class="w3-input w3-border w3-round" rows="4" cols="37">Observaciones...</textarea>
                            </div>
                            <div class="w3-panel">
                                <button class="w3-button w3-block w3-padding-24 w3-metro-dark-blue w3-round">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="pes_cal" class="w3-container" style="display: none;">
            <!-- Pestaña contenido Calendario -->
            <div class="w3-row" style="height: 565px;">
                <div class="w3-half">
                    <div class="w3-quarter">
                        <select class="w3-select w3-border w3-round" name="anioCal">
                            <option value="" disabled selected>Seleccione el año</option>
                            <option value="vacac">2018</option>
                            <option value="medic">2017</option>
                            <option value="otros">2016</option>
                            <option value="otros">2015</option>
                            <option value="otros">2014</option>
                            <option value="otros">2013</option>
                        </select>
                    </div>
                    <div class="w3-quarter">
                        <select class="w3-select w3-border w3-round" name="mesCal">
                            <option value="" disabled selected>Seleccione el mes</option>
                            <option value="vacac">Enero</option>
                            <option value="medic">Febrero</option>
                            <option value="otros">...</option>
                            <option value="otros">...</option>
                            <option value="otros">Diciembre</option>
                        </select>
                    </div>
                    <div class="w3-half">
                        <div class="w3-threequarter">
                            <h3>6 - 12 diciembre de 2016</h3>
                        </div>
                        <div class="w3-quarter">
                            <h3> << >></h3>
                        </div>
                    </div>
                </div>
                <div class="w3-panel">
                    <table class="w3-table-all w3-large w3-card-4">
                        <thead class="">
                            <tr class="w3-grey">
                                <th class="w3-border w3-center">Lunes</th>
                                <th class="w3-border w3-center">Martes</th>
                                <th class="w3-border w3-center">Miércoles</th>
                                <th class="w3-border w3-center">Jueves</th>
                                <th class="w3-border w3-center">Viernes</th>
                                <th class="w3-border w3-center">Sábado</th>
                                <th class="w3-border w3-center">Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                                <td class="w3-border">
                                    
                                </td>
                            </tr>                        
                        </tbody>
                    </table>
                </div>
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