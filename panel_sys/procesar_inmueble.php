<?php 
	#aqui faltaria hacer los formatos para aceptar solo ciertos caracteres
	include("../pack_config.php");

	session_start();
	$type_user = $_SESSION['type_user'];


	if ($type_user == 'administrador') {

	 	$name_inmueble = sanitizar($_POST['name_txt']);
	 	$cliente       = sanitizar($_POST['cliente_slc']);
	 	$calle		   = sanitizar($_POST['calle']);
	 	$num_int	   = sanitizar($_POST['num_int']);
	 	$num_ext	   = sanitizar($_POST['num_ext']);
	 	$postal		   = sanitizar($_POST['postal']);
	 	$colonia	   = sanitizar($_POST['colonia']);
	 	$entidad       = sanitizar($_POST['entidad_slc']);
	 	$demarcacion   = sanitizar($_POST['demarcacion_slc']);
	 	$fecha;

	 	$validacion_c = "SELECT * FROM inmuebles WHERE name_inmueble='$name_inmueble' and cliente='$cliente' and calle='$calle' and colonia='$colonia' and num_exterior='$num_ext' and num_interior='$num_int' and codigo_postal='$postal'";
	 	$validacion_e = mysqli_query($enlace, $validacion_c);
	 	$validacion_n = mysqli_num_rows($validacion_e);

	 	#faltaria la parte del codigo para validar que ningun campo quede vacio

	 	if ($name_inmueble !='' and $cliente!='' and $calle!='' and $num_int!='' and $num_ext!='' and $postal!='' and $colonia!='') {
	 		# code...

			 	if ($validacion_n==0) {
			 		
			 		$insert = "INSERT INTO 
			 				    inmuebles(
			 				   	name_inmueble,
			 				   	cliente,
			 				   	calle,
			 				   	colonia,
			 				   	num_exterior,
			 				   	num_interior,
			 				   	codigo_postal,
			 				   	entidad,
			 				   	demarcacion,
			 				   	zona,
			 				   	fecha_registro_inmueble,
			 				   	fecha_mod_inmueble,
			 				   	estado_repo)
			 				   VALUES('$name_inmueble','$cliente','$calle','$colonia','$num_ext','$num_int','$postal','Ciudad de México','Atizapan','Poniente Norte','$fecha','$fecha','no')";
			 		$insert = mysqli_query($enlace,$insert) or die("que onda");
			 		echo "Los datos fueron agregados correctamente";

			 	}
			 	else{
			 		echo "estas introduciendo los mismos datos";
			 	}
	 	}
	 	else{
	 		echo "Porfavor llena todos los campos del formulario";
	 	}


	} 
	else{
		echo "pas";
	}

?>