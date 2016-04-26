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
		$_SESSION['type_user']    =  "administrador";


		header("Location: $ruta/portal");
	}


	
	if ($name_user == 'mario' and $pass_user == 'supervisor') {
		
		$registro_entrada = "INSERT INTO registro_system(type_user,data_entrada) VALUES('Mario','$fecha')";
		$registro_entrada = mysqli_query($enlace, $registro_entrada) or die("no");
		
		session_start();
		$_SESSION['type_user']    =  "supervisor";
		$_SESSION['name_user']    =  "Mario";


		header("Location: $ruta/panel/supervisor/asistencia");
	}

	if ($name_user == 'oliver' and $pass_user == 'guardia') {
		
		$registro_entrada = "INSERT INTO registro_system(type_user,data_entrada) VALUES('Mario','$fecha')";
		$registro_entrada = mysqli_query($enlace, $registro_entrada) or die("no");
		
		session_start();
		$_SESSION['type_user']    =  "guardia";
		$_SESSION['name_user']    =  "Oliver";


		header("Location: $ruta/panel/guardia/asistencia");
	}
?>