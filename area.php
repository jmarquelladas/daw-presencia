<?php
/* 
 * Descripción: Clase que define las areas a las que pertenece cada usuario de la aplicación
 * Versión: 1.0 
 * Fecha: 03/ene/2018
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

class Area {
    
    protected $nombre;
    protected $observaciones;
    protected $areapadre;
    
    /**
     * Método constructor de la clase Area
     */
    public function __construct($area) {
        $this->nombre = $area['nombre'];
        $this->observaciones = $area['observaciones'];
        $this->areapadre = $area['areapadre'];
    }
    
    /***
     * Métodos que devuelven el valor de los atributos de la clase Area
     */
    public function getNombre() { return $this->nombre; }
    public function getObservaciones() { return $this->observaciones; }
    public function getAreapadre() { return $this->areapadre; }
    
    /***
     * Métodos que dan valor a los atributos de la clase Area
     */
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setObservaciones($observaciones) { $this->observaciones = $observaciones; }
    public function setAreapadre($areapadre) { $this->areapadre = $areapadre; }
    
}