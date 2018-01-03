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