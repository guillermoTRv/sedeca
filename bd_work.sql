CREATE TABLE usuarios_datos_basicos(
	id_usuario          INT NOT NULL AUTO_INCREMENT,
	nombre_g            varchar(40) NOT NULL,
	apellido_p			varchar(35) NOT NULL,
	apellido_m			varchar(35) NOT NULL,
	fecha_nacimiento 	DATETIME NOT NULL,
	curp				char(18) NOT NULL,	
	type_usuario				varchar(40) NOT NULL,
	calle				varchar(40) NOT NULL,
	colonia				varchar(30) NOT NULL,
	num_exterior		INT NOT NULL,	
	num_interior		INT NOT NULL,
	codigo_postal		INT NOT NULL,
	ciudad				varchar(30) NOT NULL,
	estado				varchar(30) NOT NULL,
	del_mun				varchar(30) NOT NULL,
	num_movil			varchar(20) NOT NULL,	
	name_img			varchar(15) NOT NULL,
	password			varchar(20) NOT NULL,

	inmueble_asign		varchar(35) NOT NULL,
	supervisor			varchar(40) NOT NULL,
	costo_serv			INT NOT NULL,
	turno				varchar(15) NOT NULL,	
	horario_laboral		varchar(13) NOT NULL,
	tipo_pago					varchar(10) NOT NULL,
	fecha_inicio_contrato		DATE NOT NULL,
	fecha_finalizacion			DATE NOT NULL,
	fecha_registro_bd			DATETIME NOT NULL,
	fecha_mod_bd				DATETIME NOT NULL,
	estado_repo					char(2),
	primary key(id_usuario)
)ENGINE=MyISAM DEFAULT CHARSET=Latin1;

CREATE TABLE inmuebles(
	id_inmueble         INT NOT NULL AUTO_INCREMENT,
	name_inmueble 	   	varchar(35) NOT NULL,
	calle				varchar(40) NOT NULL,
	colonia				varchar(30) NOT NULL,
	num_exterior		INT NOT NULL,	
	num_interior		INT NOT NULL,
	codigo_postal		INT NOT NULL,
	ciudad				varchar(30) NOT NULL,
	estado				varchar(30) NOT NULL,
	del_mun				varchar(30) NOT NULL,
	zona				varchar(15) NOT NULL,
	fecha_registro_inmueble		DATETIME NOT NULL,
	fecha_mod_inmueble			DATETIME NOT NULL,
	estado_repo					char(2),
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
