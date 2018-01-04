<?php
/* 
 * Descripción: Clase que define los usuarios de la aplicación
 * Versión: 1.0 
 * Fecha: 02/ene/2018
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

class Empleado {
    
    protected $dni;
    protected $nombre;
    protected $apellidos;
    protected $email;
    protected $telefonos;
    protected $domicilio;
    protected $poblacion;
    protected $codpostal;
    protected $provincia;
    protected $tipocontrato;
    protected $tiempocontrato;
    protected $horasemanales;
    protected $fechainicontrato;
    protected $fechafincontrato;
    protected $puestotrabajo;
    protected $esgestor;
    protected $observaciones;
    protected $area;


    /**
     * Método constructor de la clase Empleado
     */
    public function __construct($empleado) {
        $this->dni = $empleado['dni'];
        $this->nombre = $empleado['nombre'];
        $this->apellidos = $empleado['apellidos'];
        $this->email = $empleado['email'];
        $this->telefonos = $empleado['telefonos'];
        $this->domicilio = $empleado['domicilio'];
        $this->poblacion = $empleado['poblacion'];
        $this->codpostal = $empleado['codpostal'];
        $this->provincia = $empleado['provincia'];
        $this->tipocontrato = $empleado['tipocontrato'];
        $this->tiempocontrato = $empleado['tiempocontrato'];
        $this->horasemanales = $empleado['horasemanales'];
        $this->fechainicontrato = $empleado['fechainicontrato'];
        $this->fechafincontrato = $empleado['fechafincontrato'];
        $this->puestotrabajo = $empleado['puestotrabajo'];
        $this->esgestor = $empleado['esgestor'];
        $this->observaciones = $empleado['observaciones'];
        $this->area = $empleado['area'];
    }
    
    /***
     * Métodos que devuelven el valor de los atributos de la clase Empleado
     */
    public function getDni()          { return $this->dni; }
    public function getNombre()       { return $this->nombre; }
    public function getApellidos()    { return $this->apellidos; }
    public function getEmail()        { return $this->email; }
    public function getTelefonos()    { return $this->telefonos; }
    public function getDomicilio()    { return $this->domicilio; }
    public function getPoblacion()    { return $this->poblacion; }
    public function getCodpostal()    { return $this->codpostal; }
    public function getProvincia()    { return $this->provincia; }
    public function getTipocontrato() { return $this->tipocontrato; }
    public function getTiempocontrato()   { return $this->tiempocontrato; }
    public function getHorasemanales()    { return $this->tipocontrato; }
    public function getFechainicontrato() { return $this->fechainicontrato; }
    public function getFechafincontrato() { return $this->fechafincontrato; }
    public function getPuestotrabajo()    { return $this->puestotrabajo; }
    public function getEsgestor()         { return $this->esgestor; }
    public function getObservaciones()    { return $this->observaciones; }
    public function getArea()             { return $this->area; }
    
    /***
     * Métodos que dan valor a los atributos de la clase Empleado
     */
    public function setDni($dni)                           { $this->dni = $dni; }
    public function setNombre($nombre)                     { $this->nombre = $nombre; }
    public function setApellidos($apellidos)               { $this->apellidos = $apellidos; }
    public function setEmail($email)                       { $this->email = $email; }
    public function setTelefonos($telefonos)               { $this->telefonos = $telefonos; }
    public function setDomicilio($domicilio)               { $this->domicilio = $domicilio; }
    public function setPoblacion($poblacion)               { $this->poblacion = $poblacion; }
    public function setCodpostal($codpostal)               { $this->codpostal = $codpostal; }
    public function setProvincia($provincia)               { $this->provincia = $provincia; }
    public function setTipocontrato($tipocontrato)         { $this->tipocontrato = $tipocontrato; }
    public function setTiempocontrato($tiempocontrato)     { $this->tiempocontrato = $tiempocontrato; }
    public function setHorasemanales($tipocontrato)        { $this->tipocontrato = $tipocontrato; }
    public function setFechainicontrato($fechainicontrato) { $this->fechainicontrato = $fechainicontrato; }
    public function setFechafincontrato($fechafincontrato) { $this->fechafincontrato = $fechafincontrato; }
    public function setPuestotrabajo($puestotrabajo)       { $this->puestotrabajo = $puestotrabajo; }
    public function setEsgestor($esgestor)                 { $this->esgestor = $esgestor; }
    public function setObservaciones($observaciones)       { $this->observaciones = $observaciones; }
    public function setArea($area)                         { $this->area = $area; }

}
?>