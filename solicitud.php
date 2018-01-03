<?php
/* 
 * Descripción: Clase que define las solicitudes que realizan los empleados.
 * Versión: 1.0 
 * Fecha: 03/ene/2018
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

class Solicitud {
    
    protected $fechasolicitud;
    protected $fechahorapermiso;
    protected $estadotramite;
    protected $fechahorafinpermiso;
    protected $archivojustificacion;
    protected $dniempleado;
    protected $descripcionpermiso;
    
    /**
     * Método constructor de la clase Solicitud
     */
    public function __construct($solicitud) {
        $this->fechasolicitud = $solicitud['fechasolicitud'];
        $this->fechahorapermiso = $solicitud['fechahorapermiso'];
        $this->estadotramite = $solicitud['estadotramite'];
        $this->fechahorafinpermiso = $solicitud['fechahorafinpermiso'];
        $this->archivojustificacion = $solicitud['archivojustificacion'];
        $this->dniempleado = $solicitud['dniempleado'];
        $this->descripcionpermiso = $solicitud['descripcionpermiso'];
    }
    
    /***
     * Métodos que devuelven el valor de los atributos de la clase Solicitud
     */
    public function getFechasolicitud() { return $this->fechasolicitud; }
    public function getFechahorapermiso() { return $this->fechahorapermiso; }
    public function getEstadotramite() { return $this->estadotramite; }
    public function getFechahorafinpermiso() { return $this->fechahorafinpermiso; }
    public function getArchivojustificacion() { return $this->archivojustificacion; }
    public function getDniempleado() { return $this->dniempleado; }
    public function getDescripcionpermiso() { return $this->descripcionpermiso; }
    
    /***
     * Métodos que dan valor a los atributos de la clase Solicitud
     */
    public function setFechasolicitud($fechasolicitud) { $this->fechasolicitud = $fechasolicitud; }
    public function setFechahorapermiso($fechahorapermiso) { $this->fechahorapermiso = $fechahorapermiso; }
    public function setEstadotramite($estadotramite) { $this->estadotramite = $estadotramite; }
    public function setFechahorafinpermiso($fechahorafinpermiso) { $this->fechahorafinpermiso = $fechahorafinpermiso; }
    public function setArchivojustificacion($archivojustificacion) { $this->archivojustificacion = $archivojustificacion; }
    public function setDniempleado($dniempleado) { $this->dniempleado = $dniempleado; }
    public function setDescripcionpermiso($descripcionpermiso) { $this->descripcionpermiso = $descripcionpermiso; }
    
}