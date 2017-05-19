-- Descripción: Creación de tablas de APP DAW-Presencia
-- Versión - Fecha: 1.0 - 11/05/2017
-- Autor: José Miguel Arquelladas
-- Email: jmaruiz@gmail.com
-- Twitter: @jmarquelladas

--
-- Base de datos: DAW-Presencia
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla: AREA
--

CREATE TABLE IF NOT EXISTS area (
nombre VARCHAR(50) NOT NULL COMMENT 'Clave primaria para tabla AREA',
observaciones TEXT,

CONSTRAINT are_nom_PK PRIMARY KEY (nombre)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla AREA
--

INSERT INTO `area` (`nombre`,`observaciones`) VALUES
('MANTENIMIENTO',NULL),
('INFORMÁTICA',NULL),
('ADMINISTRACIÓN','Área de administración general'),
('CONTABILIDAD',NULL),
('TESORERIA',NULL),
('GESTION COMERCIAL',NULL),
('FACTURACION',NULL),
('DIRECCION',NULL);

-- -----------------------------------------------------------------------------


--
-- Estructura de tabla para la tabla: PERTENECER
--

CREATE TABLE IF NOT EXISTS pertenecer (
areahija VARCHAR(50) NOT NULL,
areapadre VARCHAR(50) NOT NULL,

CONSTRAINT per_are_are_PK PRIMARY KEY (areahija, areapadre),
CONSTRAINT per_are_hij_FK FOREIGN KEY (areahija) REFERENCES area(nombre),
CONSTRAINT per_are_pad_FK FOREIGN KEY (areapadre) REFERENCES area(nombre)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla PERTENECER
--

INSERT INTO `pertenecer`(`areahija`,`areapadre`) VALUES
('TESORERIA','ADMINISTRACION'),
('FACTURACION','GESTION COMERCIAL'),
('ADMINISTRACION','DIRECCION'),
('CONTABILIDAD','DIRECCION');


--
-- Estructura de tabla para la tabla: EMPLEADO
--

CREATE TABLE IF NOT EXISTS empleado (
dni VARCHAR(9) NOT NULL COMMENT 'Clave primaria para tabla EMPLEADO',
nombre VARCHAR(20),
apellidos VARCHAR(40),
email VARCHAR(255),
telefonos VARCHAR(100),
domicilio VARCHAR(100),
poblacion VARCHAR(50),
codpostal VARCHAR(5),
provincia VARCHAR(50),
tipocontrato SET('FIJO','TEMPORAL'),
tiempocontrato SET('COMPLETO','PARCIAL'),
horasemanales FLOAT(4,2),
fechainicontrato DATE,
fechafincontrato DATE,
puestotrabajo VARCHAR(50),
esgestor TINYINT(1) NOT NULL DEFAULT '0', /* Para control de dato lógico. Si 0 entonces FALSE si 1 entonces TRUE */
observaciones TEXT,
area VARCHAR(50),

CONSTRAINT emp_dni_PK PRIMARY KEY (dni),
CONSTRAINT emp_are_FK FOREIGN KEY (area) REFERENCES area(nombre) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla EMPLEADO
--

INSERT INTO `empleado` (`dni`,`nombre`,`apellidos`,`email`,`telefonos`,`domicilio`,`poblacion`,`codpostal`,`provincia`,`tipocontrato`,`tiempocontrato`,`horasemanales`,`fechainicontrato`,`fechafincontrato`,`puestotrabajo`,`esgestor`,`observaciones`,`area`) VALUES
('12345678Z','ANTONIO','GARCIA FERNANDEZ','AGF@EMAIL.NET','958123456 958654321 654321000','C/ PRINCIPAL Nº 1','MADRID','28001','MADRID','TEMPORAL','COMPLETO',37.50,'2004/05/24',NULL,'TECNICO INFORMATICA',0,'Observaciones .....','INFORMÁTICA'),
('01234567Y','BENITO','FERNANDEZ JIMENEZ','bfj@email.net','958456123 958321654 654321001','C/ ULTIMA Nº 1','MADRID','28001','MADRID','TEMPORAL','COMPLETO',37.50,'2001/04/27',NULL,'TECNICO CONTABLE',1,'Observaciones .....','CONTABILIDAD');

-- -----------------------------------------------------------------------------


--
-- Estructura de tabla para la tabla: PERMISO
--

CREATE TABLE IF NOT EXISTS permiso (
descripcion VARCHAR(255) NOT NULL COMMENT 'Clave primaria para tabla PERMISO',
documentonormativa VARCHAR(255),
articulo VARCHAR(50),
tiempo VARCHAR(255),
diasolicitar TINYINT(3),

CONSTRAINT per_des_PK PRIMARY KEY (descripcion)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla PERMISO
--

INSERT INTO `permiso` (`descripcion`,`documentonormativa`,`articulo`,`tiempo`,`diasolicitar`) VALUES
('VACACIONES','Estatuto de los trabajadores','Art.NNN','22 días hábiles ó 30 naturales','60'),
('CITA MEDICA','Estatuto de los trabajadores','Art.NNN','Tiempo indispensable','0');

-- -----------------------------------------------------------------------------


--
-- Estructura de tabla para la tabla: SOLICITUD
--

CREATE TABLE IF NOT EXISTS solicitud (
fechasolicitud DATETIME DEFAULT CURRENT_TIMESTAMP,
fechahorapermiso DATETIME,
estadotramite SET('EN TRAMITE','CANCELADO','APROBADA','DENEGADA'),
fechahorafinpermiso DATETIME,
archivojustificacion VARCHAR(255),
dniempleado VARCHAR(9),
descripcionpermiso VARCHAR(255),

CONSTRAINT sol_fec_PK PRIMARY KEY (dniempleado, fechahorapermiso),
CONSTRAINT sol_dni_FK FOREIGN KEY (dniempleado) REFERENCES empleado(dni),
CONSTRAINT sol_des_FK FOREIGN KEY (descripcionpermiso) REFERENCES permiso(descripcion)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla PERMISO
--

INSERT INTO `solicitud` (`fechasolicitud`,`fechahorapermiso`,`estadotramite`,`fechahorafinpermiso`,`archivojustificacion`,`dniempleado`,`descripcionpermiso`) VALUES
('2017/05/12','2017/08/01 00:00:00','EN TRAMITE','2017/08/30 23:59:59','/archivos/permisos/justificacion/permiso.pdf','12345678Z','VACACIONES'),
('2017/05/12','2017/05/15 09:36:00','EN TRAMITE',NULL,NULL,'01234567Y','CITA MEDICO');

-- -----------------------------------------------------------------------------


--
-- Estructura de tabla para la tabla: CALENDARIO
--

CREATE TABLE IF NOT EXISTS calendario (
anio VARCHAR(4) NOT NULL COMMENT 'Año del calendario',
nombre VARCHAR(100) NOT NULL COMMENT 'Nombre del calendario',
observaciones TEXT,

CONSTRAINT cal_ani_PK PRIMARY KEY (anio, nombre),
INDEX cal_ani_nom_ID (anio, nombre)

) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla PERMISO
--

INSERT INTO `calendario` (`anio`,`nombre`,`observaciones`) VALUES
('2017','Calendario laboral 2017 Informática','Calendario laboral establecido para Área de Informática'),
('2017','Calendario laboral 2017 Mantenimiento','Observaciones del calendario ....');

-- -----------------------------------------------------------------------------


--
-- Estructura de tabla para la tabla: ASIGNADO
--

CREATE TABLE IF NOT EXISTS asignado (
nombrearea VARCHAR(50) NOT NULL,
anionombrecalendario VARCHAR(104) NOT NULL,

CONSTRAINT asi_nom_PK PRIMARY KEY (nombrearea, anionombrecalendario),
INDEX asi_nom_ani_ID (nombrearea, anionombrecalendario),

CONSTRAINT asi_nom_FK FOREIGN KEY (nombrearea) REFERENCES area(nombre),
CONSTRAINT asi_ani_FK FOREIGN KEY (anionombrecalendario) REFERENCES calendario(cal_ani_nom_ID)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla PERMISO
--

INSERT INTO `asignado` (`nombrearea`,`anionombrecalendario`) VALUES
('MANTENIMIENTO','2017Calendario laboral 2017 Informática'),
('INFORMATICA','2017Calendario laboral 2017 Mantenimiento');

-- -----------------------------------------------------------------------------


--
-- Estructura de tabla para la tabla: FESTIVO
--

CREATE TABLE IF NOT EXISTS festivo (
fecha DATE NOT NULL,
tipofestivo SET ('NACIONAL','AUTONÓMICO','LOCAL'),
descripcion VARCHAR(100),
CONSTRAINT fes_fec_PK PRIMARY KEY (fecha,tipofestivo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla PERMISO
--

INSERT INTO `festivo` (`fecha`,`tipofestivo`,`descripcion`) VALUES
('2017/01/01','NACIONAL','AÑO NUEVO'),
('2017/01/06','NACIONAL','NATIVIDAD DEL SEÑOR'),
('2017/02/28','AUTONÓMICO','DÍA DE ANDALUCÍA'),
('2017/05/01','NACIONAL','DÍA DEL TRABAJO');

-- -----------------------------------------------------------------------------


--
-- Estructura de tabla para la tabla: COMPONEN
--

CREATE TABLE IF NOT EXISTS componen (
anionombrecalendario VARCHAR(104) NOT NULL,
fechafestivo DATE NOT NULL,

CONSTRAINT com_ani_PK PRIMARY KEY (anionombrecalendario, fechafestivo),
CONSTRAINT com_ani_FK FOREIGN KEY (anionombrecalendario) REFERENCES calendario(cal_ani_nom_ID),
CONSTRAINT com_fec_FK FOREIGN KEY (fechafestivo) REFERENCES festivo(fecha)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla PERMISO
--

INSERT INTO `componen` (`anionombrecalendario`,`fechafestivo`) VALUES
('2017Calendario laboral 2017 Mantenimiento','2017/01/01'),
('2017Calendario laboral 2017 Mantenimiento','2017/01/06'),
('2017Calendario laboral 2017 Mantenimiento','2017/02/28'),
('2017Calendario laboral 2017 Mantenimiento','2017/05/01');

-- -----------------------------------------------------------------------------


--
-- Estructura de tabla para la tabla: PRESENCIA
--

CREATE TABLE IF NOT EXISTS presencia (
fechahora DATETIME DEFAULT CURRENT_TIMESTAMP,
tiporegistro SET ('ENTRADA','SALIDA','DESCANSO','PERMISO'),
observaciones TEXT,
recuperacion TINYINT(1) NOT NULL DEFAULT 0,
motivorecuperacion TEXT,
fechalimiterecuperacion DATE,
dniempleado VARCHAR(9) NOT NULL,

CONSTRAINT pre_fec_dni_PK PRIMARY KEY (fechahora, dniempleado),
CONSTRAINT pre_dni_FK FOREIGN KEY (dniempleado) REFERENCES empleado(dni)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Creación de datos de ejemplo para tabla PERMISO
--

INSERT INTO `presencia` (`fechahora`,`tiporegistro`,`observaciones`,`recuperacion`,`motivorecuperacion`,`fechalimiterecuperacion`,`dniempleado`) VALUES
('2017/05/14 16:21:00','SALIDA','',0,'',NULL,'12345678Z'),
('2017/05/14 16:59:00','PERMISO','CITA MEDICO',0,NULL,NULL,'01234567Y');