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

require_once 'configuracion.php';

class DB {
    /**************************************************************************************************
     * Realiza conexión a BD con los datos configurados en la Clase Configuracion
     * Realiza la conexión a la BD y devuelve el objeto de la conexión
     * Si no se establece o da error el intento de conexión a la BD la aplicación finaliza con die()
     * @author José Miguel Arquelladas
     * @version v1.0 01/01/2018
     * @var $config Objeto con los datos de configuración de la aplicación
     * @return Objeto PDO para utilizarlo para operaciones con la BD
     **************************************************************************************************/
    public static function conectaDB() {
        // Creamos objeto para rescatar valores de configuración general de la aplicación.
        $config = new Configuracion();
        
        // Configuramos las opciones de conexión a la BD
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=".$config->host.";dbname=".$config->nombreBD;
        
        // Creamos la conexión a la BD y realizamos el control de errores
        try {
            // Creamos la conexión a la BD
            $conex = new PDO($dsn, $config->usuBDatos, $config->passwd, $opc);
        } catch (PDOException $ex) { // En caso de error de conexión se muestra el aviso y tipo de error de conexión.
            echo "<p><strong>Estimado usuario:</strong></p>";
            echo "<p>Error en conexión a la base de datos <strong>".$config->nombreBD."</strong>.</p>";
            echo "<p>Mensaje de error: ".$ex->getMessage().".</p>";
            echo "<p>Comunique al servicio de soporte de la aplicación esta incidencia. ¡ Gracias !</p>";
            die(); // Salimos de la aplicación.
        }
        /** Atributos del objeto de la conexión de la base de datos. Comentar cuando no haga falta.
        echo '<p>' .$conexion->getAttribute(PDO::ATTR_CLIENT_VERSION). '</p>';
        echo '<p>' .$conexion->getAttribute(PDO::ATTR_CONNECTION_STATUS). '</p>';
         */
        return $conex; // Envia el objeto PDO al que se ha conectado
    }
    
    /***************************************************************************
     * Método que realiza una consulta a la BD y devuelve el resultado
     * Llama al método conectaDB()
     * @see conectaDB()
     * @author José Miguel Arquelladas
     * @version v1.0 06/01/2018
     * @param consulta es la cadena SQL con la que se realiza la consulta
     * @var conex Objeto PDO con la que se realiza la conexión a la BD
     * @return resultado es el resultado de la consulta realizada
     **************************************************************************/
    public static function consultaSQL($consulta) {
        // Conectamos a la BD
        $conex = DB::conectaDB();
        // Realizamos la consulta y la guardamos
        $resultado = $conex->query($consulta);
        // Desconectamos la BD
        $conex = NULL;
        return $resultado;
    }
    
    /***************************************************************************
     * Método que comprueba si el usuario existe en la BD y si es correctamente
     * validado devuelve datos del empleado. Si no es validado correctamente devuelve FALSE.
     * Llama al método conectaDB()
     * @see conectaDB()
     * @author José Miguel Arquelladas
     * @version v1.0 06/01/2018
     * @param usuario El nombre de usuario
     * @param contrasena La contraseña del usuario
     * @return array Datos del usuario si se realiza la validación correctamente
     * @return FALSE si no es correcta la validación
     **************************************************************************/
    public static function verificaUsuario($usuario, $contrasena) {
        $sql = "SELECT dni, contras, nombre, apellidos, esgestor FROM empleado ";
        $sql .= "WHERE dni = '$usuario'";
        $resultado = self::consultaSQL($sql);
        $fila = $resultado->fetch(); // Sólo puede haber un resultado
        if(($fila !== FALSE) && password_verify($contrasena, $fila['contras'])) { // El usuario y contraseña es correcto
            $datos = array(
                dni=>$fila['dni'],
                nombre=>$fila['nombre'],
                apellidos=>$fila['apellidos'],
                esgestor=>$fila['esgestor'],
            );
            return $datos;
        } else {
            return FALSE;
        }
    }
    
    /***************************************************************************
     * Método que comprueba qué tipo de usuario es
     * Llama al método conectaDB()
     * @see conectaDB()
     * @author José Miguel Arquelladas
     * @version v1.0 06/01/2018
     * @param usuario El nombre de usuario
     * @return boolean TRUE  si es del Tipo Gestor
     *                 FALSE si es del Tipo Empleado
     **************************************************************************/
    public static function esTipogestor($usuario) {
        $sql = "SELECT dni, esgestor FROM empleado ";
        $sql .= "WHERE dni = '$usuario'";
        $resultado = self::consultaSQL($sql);
        $fila = $resultado->fetch(); // Sólo puede haber un resultado
        if($fila['esgestor'] == 1) { // Si es del tipo Gestor
            return TRUE;
        } else {
            return FALSE;
        }
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