<?php 
	
	$cambioVar_sub             = substr($nav,0,6);

	if ($cambioVar_sub == "cambio") {
		global $ruta_select; $ruta_select = "personal";


		$cambioVar = $cambioVar_sub;

		$datosGenerales_sub    = substr($nav,7,14);
		if ($datosGenerales_sub == "datosGenerales") {
			echo $varUser = substr($nav, 22, 5);
		}


		$datosUser_sub         = substr($nav,7,9);
		if ($datosUser_sub == "datosUser") {
			echo $varUser = substr($nav, 17, 5);
		}


		$foto_sub              = substr($nav,7,4);
		if ($foto_sub == "foto") {
			echo $varUser = substr($nav, 12, 5);
		}



		$cambioInmueble_sub    = substr($nav,7,12);
		if ($cambioInmueble_sub == "InmuebleUser") {
			echo $varUser = substr($nav, 20, 5);
		}


		$cambioCondiciones_sub = substr($nav,7,11);
		if ($cambioCondiciones_sub == "condiciones") {
			echo $varUser = substr($nav, 19, 5);
		}


		$cambioPuesto_sub      = substr($nav,7,6);
		if ($cambioPuesto_sub == "Puesto") {
			echo $varUser = substr($nav, 14, 5);
		}


	}

?>  