<?php 
		
		$permitidosPersonal = array( "personal_crear" );

		if (in_array($nav, $permitidosPersonal) or $user_nav=='User'){
			$complementoGuardar = "href='#'";
       		$variableControllerGuardar = 1;
		}

		
		$permitidosInmuebles = array( "inmuebles_crear" , "inmuebles_editar" );
	    
	    if (in_array($nav, $permitidosInmuebles)) {
	    	$complementoGuardar = "href='#'";
	    	$variableControllerGuardar = 1;
	    }
	    if($variableControllerGuardar!=1){
	    	$complementoGuardar = $popover.$opcion_none;
	    }
		
		
		?>
		<a <?php echo $complementoGuardar ?> value="enviar" id="btn-guardar" class='a_limpia'>
		    <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
		</a>
		<?php
?>

