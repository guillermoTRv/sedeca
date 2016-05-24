CREATE TABLE `usuarios_datos_basicos` (
  `id_usuario` int(11) NOT NULL,
  `nombre_g` varchar(40) NOT NULL,
  `apellido_p` varchar(35) NOT NULL,
  `apellido_m` varchar(35) NOT NULL,
   `curp` char(18) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `calle` varchar(40) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `num_exterior` int(11) NOT NULL,
  `num_interior` int(11) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `entidad` varchar(30) NOT NULL,
  `demarcacion` varchar(30) NOT NULL,
  `num_movil` varchar(20) NOT NULL,
  `name_img` varchar(15) NOT NULL,
  `pass_xc` varchar(20) NOT NULL,
  `inmueble_asign` varchar(35) NOT NULL,
  `supervisor` varchar(40) NOT NULL,
  `costo_serv` int(11) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `horario_laboral` varchar(13) NOT NULL,
  `tipo_pago` varchar(10) NOT NULL,
  `fecha_inicio_contrato` date NOT NULL,
  `fecha_finalizacion` date NOT NULL,
  `fecha_registro_bd` datetime NOT NULL,
  `fecha_mod_bd` datetime DEFAULT NULL,
  `estado_repo` char(2) DEFAULT NULL,
  `puesto` varchar(10) DEFAULT 'NOT NULL',
  `empresa` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



CREATE TABLE inmuebles(
  `id_inmueble` int(11) NOT NULL,
  `name_inmueble` varchar(35) NOT NULL,
  `cliente` varchar(20) NOT NULL DEFAULT 'NOT NULL',
  `calle` varchar(40) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `num_exterior` int(11) NOT NULL,
  `num_interior` int(11) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `entidad` varchar(30) NOT NULL,
  `demarcacion` varchar(30) NOT NULL,
  `zona` varchar(15) NOT NULL,
  `supervisor` varchar(30) NOT NULL,
  `fecha_registro_inmueble` datetime NOT NULL,
  `fecha_mod_inmueble` datetime NOT NULL,
  `estado_repo` char(2) DEFAULT NULL,
  `empresa` int(11) NOT NULL,
  `referencia` varchar(400) NOT NULL
	primary key(id_inmueble)
)ENGINE=MyISAM DEFAULT CHARSET=Latin1;


CREATE TABLE registros_jornada(
	id_reg_j INT NOT NULL AUTO_INCREMENT,
	id_usuario int NOT NULL
	type_user varchar(10) NOT NULL,
	data_entrada DATETIME NOT NULL,
	data_salida	DATETIME NOT NULL,
	asistencia DATE NOT NULL,
	primary key(id_reg_j)	
)ENGINE=MyISAM DEFAULT CHARSET=Latin1;

CREATE TABLE registro_system(
	id_reg_sys INT NOT NULL AUTO_INCREMENT,
	id_usuario INT,
	type_user varchar(10) NOT NULL,
	data_entrada DATETIME NOT NULL,
	data_salida DATETIME,
	primary key(id_reg_sys)
)

CREATE TABLE clientes(
	id_cliente INT NOT NULL AUTO_INCREMENT,
	name_cliente varchar(30) NOT NULL, 
	name_get varchar(30) NOT NULL,
	primary key(id_cliente)
)ENGINE=MyISAM DEFAULT CHARSET=Latin1;

CREATE TABLE check_list(
	id_checklist INT NOT NULL AUTO_INCREMENT, 
	id_empresa INT NOT NULL,
	categoria varchar(35),
	situacion_name varchar(40),
	status char(2),
	fecha_registro_bd DATETIME,
	primary key(id_checklist)
)ENGINE=MyISAM DEFAULT CHARSET=Latin1;

CREATE TABLE check_categoria(
	id_relcategoria INT NOT NULL AUTO_INCREMENT,
	id_empresa INT NOT NULL,
	categoria varchar(35),
	fecha_registro_bd DATETIME,
	primary key(id_relcategoria)
)ENGINE=MyISAM DEFAULT CHARSET=Latin1;

CREATE TABLE clientes_usuarios(
	id_clienteuser INT NOT NULL AUTO_INCREMENT,
	
	nombre_g            varchar(40) NOT NULL,
	apellido_p			varchar(35) NOT NULL,
	apellido_m			varchar(35) NOT NULL,
	nombre_usuario      varchar(25) NOT NULL,
	curp				char(18) NOT NULL,
	password			varchar(20) NOT NULL,
	fecha_registro_bd			DATETIME NOT NULL,
	fecha_mod_bd				DATETIME NOT NULL,
	primary key(id_clienteuser)

)ENGINE=MyISAM DEFAULT CHARSET=Latin1;

CREATE TABLE registros_es(
	id_registro_es  INT NOT NULL AUTO_INCREMENT,
	id_personal     INT NOT NULL,
	hora_entrada    DATETIME NOT NULL,
	hora_salida     DATETIME NOT NULL,
	estado_registro varchar(10) NOT NULL,
	inmueble        INT NULL,
	primary key(id_registro_es)	
)