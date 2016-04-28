<?php 
		
		$permitidosPersonal = array( "crear", "editar_personal" );

		if (in_array($nav, $permitidosPersonal) or $user_num=='user'){
			$complementoGuardar = "href='#'";
       		$variableController = 1;
		}

		
		$permitidosInmuebles = array( "crear_inmueble" , "editar_inmuebles" );
	    
	    if (in_array($nav, $permitidosInmuebles)) {
	    	$complementoGuardar = "href='#'";
	    	$variableController = 1;
	    }
	    if($variableController!=1){
	    	$complementoGuardar = "";
	    }
		
		


		?>
		<a <?php echo $complementoGuardar ?> value="enviar" id="btn-guardar" class='a_limpia'>
		    <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
		</a>
		<?php
?>

