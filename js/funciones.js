/*
 * Descripción: Código de funciones javascript comunes a todas las páginas html
 * Versión: 1.0
 * Fecha inicio: 05/02/2018
 * Fecha final:
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */


function mostrarMenu(identificador) {
    var x = document.getElementById(identificador);
    if (x.className.indexOf("w3-show") == -1 ) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace("w3-show", "");
    }
}