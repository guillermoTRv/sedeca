<?php 
		$datosGenerales_sub    = substr($nav,7,14);
		if ($datosGenerales_sub == "datosGenerales") {
			include("panel_sys/cambio_usuario/editar_datosGenerales.php");
		}


		$datosUser_sub         = substr($nav,7,9);
		if ($datosUser_sub == "datosUser") {
			include("panel_sys/cambio_usuario/editar_datosUsuario.php");
		}


		$foto_sub              = substr($nav,7,4);
		if ($foto_sub == "foto") {
			include("panel_sys/cambio_usuario/editar_foto.php");
		}



		$cambioInmueble_sub    = substr($nav,7,12);
		if ($cambioInmueble_sub == "InmuebleUser") {
			include("panel_sys/cambio_usuario/editar_datosInmueble.php");
		}


		$cambioCondiciones_sub = substr($nav,7,11);
		if ($cambioCondiciones_sub == "condiciones") {
			include("panel_sys/cambio_usuario/editar_datosCondiciones.php");
		}


		$cambioPuesto_sub      = substr($nav,7,6);
		if ($cambioPuesto_sub == "Puesto") {
			include("panel_sys/cambio_usuario/editar_Puesto.php");
		}

?>
