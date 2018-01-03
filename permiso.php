<?php
/* 
 * Descripción: Clase que define los permisos de presencia de los empleados.
 * Versión: 1.0 
 * Fecha: 03/ene/2018
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

class Permiso {
    
    protected $descripcion;
    protected $documentonormativa;
    protected $articulo;
    protected $tiempo;
    protected $diasolicitar;

    /**
     * Método constructor de la clase Permiso
     */
    public function __construct($permiso) {
        $this->descripcion = $permiso['descripcion'];
        $this->documentonormativa = $permiso['documentonormativa'];
        $this->articulo = $permiso['articulo'];
        $this->tiempo = $permiso['tiempo'];
        $this->diasolicitar = $permiso['diasolicitar'];
    }
    
    /***
     * Métodos que devuelven el valor de los atributos de la clase Permiso
     */
    public function getDescripcion() { return $this->descripcion; }
    public function getDocumentonormativa() { return $this->documentonormativa; }
    public function getArticulo() { return $this->articulo; }
    public function getTiempo() { return $this->tiempo; }
    public function getDiasolicitar() { return $this->diasolicitar; }
    
    /***
     * Métodos que dan valor a los atributos de la clase Permiso
     */
    public function setDescripcion($descripcion) { $this->descripcion = $descripcion; }
    public function setDocumentonormativa($documentonormativa) { $this->documentonormativa = $documentonormativa; }
    public function setArticulo($articulo) { $this->articulo = $articulo; }
    public function setTiempo($tiempo) { $this->tiempo = $tiempo; }
    public function setDiasolicitar($diasolicitar) { $this->diasolicitar = $diasolicitar; }
    
}
