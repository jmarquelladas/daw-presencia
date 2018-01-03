<?php
/* 
 * Descripción: Clase que define las operaciones con BBDD
 * Versión: 1.1
 * Fecha: 18/jun/2017
 * Autor: José Miguel Arquelladas
 * Email: jmaruiz@gmail.com
 * Twitter: @jmarquelladas
 */

header('Content-Type: text/html; charset=UTF-8');

require_once('configuracion.php');

class DB {  
    /*******************************************************************
     * Método que realiza la conexión a la BD y realiza comprobaciones
     ******************************************************************/
    public static function conectaDB() {       
        $config = new Configuracion(); // Creamos objeto para rescatar valores de configuración general de la aplicación.
     
        /** Comprobaciones. Comentar para cuando no haga falta
        echo '<p>Host: ' .$config->host. '</p>';
        echo '<p>Base de datos: ' .$config->nombreBD. '</p>';
        echo '<p>Usuario de la base de datos: ' .$config->usuBDatos. '</p>';
        echo '<p>Contraseña: ' .$config->passwd. '</p>';
        */
        
        // Configuramos las opciones de conexión a la BD
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=".$config->host.";dbname=".$config->nombreBD;
        
        try {
            $conex = new PDO($dsn, $config->usuBDatos, $config->passwd, $opc);
        } catch (PDOException $ex) {
            echo "<p><strong>Estimado usuario:</strong></p>";
            echo "<p>Error en conexión a la base de datos <strong>".$config->nombreBD."</strong>.</p>";
            echo "<p>Mensaje de error: ".$ex->getMessage().".</p>";
            echo "<p>Comunique al servicio de soporte de la aplicación esta incidencia. ¡ Gracias !</p>";
            die();
        }
        /** Atributos del objeto de la conexión de la base de datos. Comentar cuando no haga falta.
        echo '<p>' .$conexion->getAttribute(PDO::ATTR_CLIENT_VERSION). '</p>';
        echo '<p>' .$conexion->getAttribute(PDO::ATTR_CONNECTION_STATUS). '</p>';
         */
        return $conex; // Envia el objeto PDO al que se ha conectado
    }

    /**********************************************
     * Método que realiza la desconexión a la BD 
     *********************************************/
    public static function desconectaDB() {
        $conex = null;
    }
    
    /************************************************
     * Método que realiza una consulta a una BD y 
     * devuelve el resultado
     ************************************************/
    public static function consultaSQL($consulta) {
        // Conectamos a la BD
        DB::conectaDB();
        
    }



    /************************************************
     * Método que ejecuta una consulta a la BBDD
     ***********************************************/
    protected static function ejecutaConsulta($sql) {
        // Configuramos las opciones de conexión a la BBDD
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" );
        $dsn = "mysql:host=localhost;dbname=".self::BASEDATOS;
        $usuario = self::USUARIO;
        $contrasena = self::PASSW;
        
        try {
            // Creamos el objeto de la BBDD
            $dwes = new PDO($dsn, $usuario, $contrasena, $opc);
            $resultado = NULL;
            if(isset($dwes)) $resultado = $dwes->query($sql);
        } catch (PDOException $ex) {
            die("Error: ".$ex->getMessage());
        }
        return $resultado;
    }
    
    
    /**
     * Método que devuelve los movimientos de un usuario
     */
    public static function getMovimientosUsuario($usuario) {
        
        // campos - array
        // tabla - string
        // condicion completa - string
        // sentencia completa - string
        
        // Creamos la consulta de los movimientos del usuario pasado como parámetro.
        $sql =  "SELECT codigoMov, loginUsu, fecha, concepto, cantidad FROM movimientos ";
        $sql .= "WHERE loginUsu = '$usuario' ";
        $sql .= "ORDER BY fecha ASC, codigoMov";
        $resultado = self::ejecutaConsulta($sql);
        // Creamos el array principal
        $movimientos = array();
        
        if($resultado) { // Existen registros en la consulta realizada
            // Creamos el array del movimiento
            $movimiento = array();
            
            // Añadimos los movimientos al array
            // Aquí también creamos el saldo por cada movimiento
            $mov = $resultado->fetch(); // Primer registro
            while ($mov != NULL) {
                // Creamos la instancia
                $registro = new Movimiento($mov);
                // Añadimos los valores de los atributos al array
                $movimiento['cod'] = $registro->getCodigo();
                $movimiento['usu'] = $registro->getLogin();
                $movimiento['fecha'] = $registro->getFecha();
                $movimiento['concepto'] = $registro->getConcepto();
                $movimiento['cantidad'] = $registro->getCantidad();
                // Hallamos el saldo del movimiento
                if(!empty($movimientos)) { // Ya existen datos en array
                    // Realizamos la operación de sumar al saldo anterior 
                    // la cantidad del movimiento para crear el saldo actual
                    $movimiento['saldo'] = $movimientos[count($movimientos)-1]['saldo'] + $registro->getCantidad();
                } else { // Es el primer movimiento
                    // Introducimos el saldo inicial
                    $movimiento['saldo'] = $registro->getCantidad();
                }
                // Añadimos el nuevo movimiento al array principal
                array_push($movimientos, $movimiento);
                // Pasamos al siguiente movimiento de la consulta
                $mov = $resultado->fetch();
            }
        }
        
        // Finalizamos enviando el array de los movimientos de la consulta realizada
        return $movimientos;
    }
    
    
    /**
     * Método que devuelve todos los recibos de un usuario
     * @param type $usuario
     * @return array
     */
    public static function getRecibosUsuario($usuario) {
        
        // Creamos la consulta de los recibos del usuario pasado como parámetro
        $sql =  "SELECT codigoMov, loginUsu, fecha, concepto, cantidad FROM movimientos ";
        $sql .= "WHERE loginUsu = '$usuario' AND cantidad < 0 ";
        $sql .= "ORDER BY fecha ASC, codigoMov";
        $resultado = self::ejecutaConsulta($sql);
        // Creamos el array principal de recibos
        $recibos = array();
        
        if($resultado) { // Existen recibos en la consulta realizada
            // Creamos el array del recibo
            $recibo = array();
            
            // Añadimos los recibo al array
            $rec = $resultado->fetch(); // Primer registro
            while ($rec != NULL) {
                // Creamos la instancia
                $registro = new Movimiento($rec);
                
                // Añadimos los valores de los atributos al array
                $recibo['cod'] = $registro->getCodigo();
                $recibo['usu'] = $registro->getLogin();
                $recibo['fecha'] = $registro->getFecha();
                $recibo['concepto'] = $registro->getConcepto();
                $recibo['cantidad'] = $registro->getCantidad();
                
                // Añadimos el nuevo recibo al array principal
                array_push($recibos, $recibo);
                
                // Pasamos al siguiente recibo de la consulta
                $rec = $resultado->fetch();
            }
        }
        
        // Finalizamos enviando el array de los recibos de la consulta realizada
        return $recibos;
    }


    /**
     * Método que devuelve un movimiento en concreto
     * @param type $codigo
     * @return \Movimiento
     */
    public static function getMovimiento($codigo) {
        $sql = "SELECT codigoMov, loginUsu, fecha, concepto, cantidad FROM movimientos ";
        $sql .= "WHERE codigoMov = '$codigo'";
        $resultado = self::ejecutaConsulta($sql);
        $movimiento = NULL;
        
        if(isset($resultado)) {
            $mov = $resultado->fetch();
            $movimiento = new Movimiento($mov);
        }
        return $movimiento;
    }

    
    /**
     * Verifica si el usuario existe en la BBDD
     * @param type $usuario
     * @param type $contrasena
     * @return boolean
     */
    public static function verificaUsuario($usuario, $contrasena) {
        $sql = "SELECT login, password FROM empleado ";
        $sql .= "WHERE login = '$usuario'";
        $resultado = self::ejecutaConsulta($sql);
        $verificado = FALSE;
        
        if(isset($resultado)) {
            $fila = $resultado->fetch();
            if(($fila !== FALSE) && password_verify($contrasena, $fila['contras'])) $verificado = TRUE;
        }
        return $verificado;
    }
    
    
    /*
     * Método que obtiene el código para el nuevo movimiento
     */
    public static function getCodigoUltMov($login) {
        $sql = "SELECT codigoMov FROM movimientos ";
        $sql .= "ORDER BY codigoMov DESC LIMIT 1";
        $resultado = self::ejecutaConsulta($sql);
        
        if(isset($resultado)) {
            $fila = $resultado->fetch();
            $codMov = $fila['codigoMov']+1;
        } else { // No hay registros en la tabla de movimientos
            // Es el primer registro de la tabla
            $codMov = '0001';
        }
        
        return $codMov;
    }
    
    /**
     * Método para insertar un ingreso en la tabla movimientos
     */
    public static function setIngMovimiento($cod, $log, $fec, $con, $can) {
        
        $sql = "INSERT INTO movimientos (codigoMov, loginUsu, fecha, concepto, cantidad) ";
        $sql .= "VALUES ('$cod', '$log', '$fec', '$con', '$can')";
        
        // Configuramos las opciones de conexión a la BBDD
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" );
        $dsn = "mysql:host=localhost;dbname=banca_electronica";
        $usuario = self::USUARIO;
        $contrasena = self::PASSW;
        
        try {
            // Creamos el objeto de la BBDD
            $dwes = new PDO($dsn, $usuario, $contrasena, $opc);
            // Iniciamos las transacción
            $dwes->beginTransaction();
            // Ejecutamos la sentencia sql y la guardamos en una variable para
            // comprobar el resultado
            if($dwes->exec($sql) !==0 ) { // Se ha ejecutado correctamente la transacción
                $dwes->commit(); // Se cierra la transacción correctamente
                $resultado = TRUE;
            } else { // Se ha producido algún error
                $dwes->rollBack(); // Se cierra la transacción sin realizar la operación
                $resultado = FALSE;
            }
        } catch (PDOException $ex) {
            die("Error: ".$ex->getMessage());
            $resultado = FALSE;
        }
        return $resultado;
    }
    
    /**
     * Elimina un recibo de la tabla movimientos
     */
    public static function setElimRecibo($cod) {
        
        $sql = "DELETE FROM movimientos WHERE codigoMov='$cod'";
        
        // Configuramos las opciones de conexión a la BBDD
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" );
        $dsn = "mysql:host=localhost;dbname=banca_electronica";
        $usuario = self::USUARIO;
        $contrasena = self::PASSW;
        
        try {
            // Creamos el objeto de la BBDD
            $dwes = new PDO($dsn, $usuario, $contrasena, $opc);
            // Iniciamos las transacción
            $dwes->beginTransaction();
            // Ejecutamos la sentencia sql y la guardamos en una variable para
            // comprobar el resultado
            if($dwes->exec($sql) !==0 ) { // Se ha ejecutado correctamente la transacción
                $dwes->commit(); // Se cierra la transacción correctamente
                $resultado = TRUE;
            } else { // Se ha producido algún error
                $dwes->rollBack(); // Se cierra la transacción sin realizar la operación
                $resultado = FALSE;
            }
        } catch (PDOException $ex) {
            die("Error: ".$ex->getMessage());
            $resultado = FALSE;
        }
        return $resultado;
    }
    
    
    /**
     * Alta de usuarios
     */
    public static function setAltaUsuario ($login, $contr, $nom_usu, $fec_nac) {
        
        $sql = "INSERT INTO usuarios (login, password, nombre, fNacimiento) ";
        $sql .= "VALUES ('$login', '$contr', '$nom_usu', '$fec_nac')";
        
        // Configuramos las opciones de conexión a la BBDD
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" );
        $dsn = "mysql:host=localhost;dbname=banca_electronica";
        $usuario = self::USUARIO;
        $contrasena = self::PASSW;
        
        try {
            // Creamos el objeto de la BBDD
            $dwes = new PDO($dsn, $usuario, $contrasena, $opc);
            // Iniciamos las transacción
            $dwes->beginTransaction();
            // Ejecutamos la sentencia sql y la guardamos en una variable para
            // comprobar el resultado
            if($dwes->exec($sql) !==0 ) { // Se ha ejecutado correctamente la transacción
                $dwes->commit(); // Se cierra la transacción correctamente
                $resultado = TRUE;
            } else { // Se ha producido algún error
                $dwes->rollBack(); // Se cierra la transacción sin realizar la operación
                $resultado = FALSE;
            }
        } catch (PDOException $ex) {
            die("Error: ".$ex->getMessage());
            $resultado = FALSE;
        }
        return $resultado;
    }
    

    /**
     * Obtiene los datos de un usuario (Objeto Usuario)
     * @param string $login Login del usuario
     * @return Usuario Retorna un objeto tipo Usuario.
     * @return boolean Retorna FALSE si la consulta no devuelve ningún resultado.
     */
    public static function getUsuario($login) {
        
        // Creamos la consulta 
        $sql = "SELECT login, password, nombre, fNacimiento FROM usuarios ";
        $sql .= "WHERE login = '$login'";
        $resultado = self::ejecutaConsulta($sql);
        
        if(isset($resultado)) { // Se ha encontrado el registro buscado
            $fila = $resultado->fetch();
            // Añadimos los datos de la consulta al objeto Usuario
            return new Usuario($fila);
        } else { // No se encuentra el registro buscado
            return FALSE;
        }
    }
}
?>