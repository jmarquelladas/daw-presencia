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
            <div class="w3-rest w3-container w3-center">
                <h4>¿ Olvidó su clave ?</h4>
            </div>
        </div>
    </div>
    <form id="form_comprobar_correo" method="post" class="w3-container w3-card-4">
        <div class="w3-container w3-center">
            <br/>
            <p>
                <input type="email" name="dircorreo" class="w3-input" required>
                <label>Escriba la dirección de correo electrónico asociada a su usuario.</label>
            </p>
            <p>
                <input type="submit" name="enviar" value=" Enviar " class="w3-button w3-section w3-metro-dark-blue w3-ripple">
                <input type="button" name="volver" value=" Volver " class="w3-button w3-section w3-metro-dark-blue w3-ripple">
                <i class="fa fa-spinner fa-spin" style="font-size:24px; display: none;"></i><br/>
            </p>
        </div>
    </form>
</div>