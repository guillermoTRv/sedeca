<?php 
	include("../../pack_config.php");

	session_start();
	$type_user = $_SESSION['type_user'];



	if ($type_user == 'administracion') {
	 	#se ejecuta codigo
	} 
	else{
		#no se ejecuta ni madre de codigo
	}

	
?>