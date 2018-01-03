<?php
/* 
 * Descripción: Clase que define los festivos de los calendarios.
 * Versión: 1.0 
 * Fecha: 03/ene/2018
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

class Festivos {
    
    protected $fecha;
    protected $tipofestivo;
    protected $descripcion;
    protected $calendario;
    
    /**
     * Método constructor de la clase Festivo
     */
    public function __construct($festivo) {
        $this->fecha = $festivo['fecha'];
        $this->tipofestivo = $festivo['tipofestivo'];
        $this->descripcion = $festivo['descripcion'];
        $this->calendario = $festivo['calendario'];
    }
    
    /***
     * Métodos que devuelven el valor de los atributos de la clase Festivo
     */
    public function getFecha() { return $this->fecha; }
    public function getTipofestivo() { return $this->tipofestivo; }
    public function getDescripcion() { return $this->descripcion; }
    public function getCalendario() { return $this->calendario; }
    
    /***
     * Métodos que dan valor a los atributos de la clase Festivo
     */
    public function setFecha($fecha) { $this->fecha = $fecha; }
    public function setTipofestivo($tipofestivo) { $this->tipofestivo = $tipofestivo; }
    public function setDescripcion($descripcion) { $this->descripcion = $descripcion; }
    public function setCalendario($calendario) { $this->calendario = $calendario; }
    
}
