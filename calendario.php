<?php
/* 
 * Descripción: Clase que define los calendarios de cada area.
 * Versión: 1.0 
 * Fecha: 03/ene/2018
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

class Calendario {
    
    protected $anio;
    protected $nombre;
    protected $observaciones;
    protected $areasignada;
    
    /**
     * Método constructor de la clase Calendario
     */
    public function __construct($calendario) {
        $this->anio = $calendario['anio'];
        $this->nombre = $calendario['nombre'];
        $this->observaciones = $calendario['observaciones'];
        $this->areasignada = $calendario['areasignada'];
    }
    
    /***
     * Métodos que devuelven el valor de los atributos de la clase Calendario
     */
    public function getAnio() { return $this->anio; }
    public function getNombre() { return $this->nombre; }
    public function getObservaciones() { return $this->observaciones; }
    public function getAreasignada() { return $this->areasignada; }
    
    /***
     * Métodos que dan valor a los atributos de la clase Calendario
     */
    public function setAnio($anio) { $this->anio = $anio; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setObservaciones($observaciones) { $this->observaciones = $observaciones; }
    public function setAreasignada($areasignada) { $this->areasignada = $areasignada; }
    
}
