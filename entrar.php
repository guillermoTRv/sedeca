<?php 
	include("ruta.php");
	include("sanitizar.php");
	include("evaluar_toquen.php");
	include("cfg.php");
	include("time_fecha.php");


	$name_user = sanitizar($_POST['user']);
	$pass_user = sanitizar($_POST['pass']);

	if ($name_user == 'admin' and $pass_user == 'pass') {
		
		$registro_entrada = "INSERT INTO registro_system(type_user,data_entrada) VALUES('administrador','$fecha')";
		$registro_entrada = mysqli_query($enlace, $registro_entrada) or die("no");
		
		session_start();
		$_SESSION['usuario_sys']  =  "administrador";


		header("Location: $ruta/portal.php");


	}
	else{
		header("Location: $ruta");
	}
?>