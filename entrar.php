<?php 
	include("ruta.php");
	include("sanitizar.php");
	include("evaluar_toquen.php");
	
	$name_user = sanitizar($_POST['user']);
	$pass_user = sanitizar($_POST['pass']);

	if ($name_user == 'admin' and $pass_user == 'pass') {
		header("Location: $ruta/portal.php");
	}
	else{
		header("Location: $ruta");
	}
?>