<!DOCTYPE html>
<!--
Descripción: Formulario de olvido de clave
Versión: 1.0
Fecha inicio: 11/04/2018
Fecha final: 
Autor: José Miguel Arquelladas
Email: jmaruiz@gmail.com
Twitter: @jmarquelladas
-->

<!-- Formulario de para introducir la dirección de correo electrónico del usuario y enviar mensaje con usuario y clave. -->
<div class="w3-row">
    <div class="w3-container w3-metro-dark-blue">
        <div class="w3-row">
            <!--
            <div class="w3-col" style="width:60px">
                <i class="fa fa-user fa-3x" aria-hidden="true"></i>
            </div>
            -->
            <div class="w3-rest w3-container w3-center">
                <h4>¿ Olvidó su clave ?</h4>
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
</div>