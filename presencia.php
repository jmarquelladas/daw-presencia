<?php
/* 
 * Descripción: Clase que define los registros de presencia de los empleados.
 * Versión: 1.0 
 * Fecha: 03/ene/2018
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

class Presencia {
    
    protected $fechahora;
    protected $tiporegistro;
    protected $observaciones;
    protected $recuperacion;
    protected $motivorecuperacion;
    protected $fechalimiterecuperacion;
    protected $dniempleado;
    protected $permiso;


    /**
     * Método constructor de la clase Presencia
     */
    public function __construct($presencia) {
        $this->fechahora = $presencia['fechahora'];
        $this->tiporegistro = $presencia['tiporegistro'];
        $this->observaciones = $presencia['observaciones'];
        $this->recuperacion = $presencia['recuperacion'];
        $this->motivorecuperacion = $presencia['motivorecuperacion'];
        $this->fechalimiterecuperacion = $presencia['fechalimiterecuperacion'];
        $this->dniempleado = $presencia['dniempleado'];
        $this->permiso = $presencia['permiso'];
    }
    
    /***
     * Métodos que devuelven el valor de los atributos de la clase Presencia
     */
    public function getFechahora() { return $this->fechahora; }
    public function getTiporegistro() { return $this->tiporegistro; }
    public function getObservaciones() { return $this->observaciones; }
    public function getRecuperacion() { return $this->recuperacion; }
    public function getMotivorecuperacion() { return $this->motivorecuperacion; }
    public function getFechalimiterecuperacion() { return $this->fechalimiterecuperacion; }
    public function getDniempleado() { return $this->dniempleado; }
    public function getPermiso() { return $this->permiso; }
    
    /***
     * Métodos que dan valor a los atributos de la clase Presencia
     */
    public function setFechahora($fechahora) { $this->fechahora = $fechahora; }
    public function setTiporegistro($tiporegistro) { $this->tiporegistro = $tiporegistro; }
    public function setObservaciones($observaciones) { $this->observaciones = $observaciones; }
    public function setRecuperacion($recuperacion) { $this->recuperacion = $recuperacion; }
    public function setMotivorecuperacion($motivorecuperacion) { $this->motivorecuperacion = $motivorecuperacion; }
    public function setFechalimiterecuperacion($fechalimiterecuperacion) { $this->fechalimiterecuperacion = $fechalimiterecuperacion; }
    public function setDniempleado($dniempleado) { $this->dniempleado = $dniempleado; }
    public function setPermiso($permiso) { $this->permiso = $permiso; }
            
}