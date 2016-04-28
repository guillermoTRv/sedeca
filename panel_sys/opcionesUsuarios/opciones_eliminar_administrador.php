<?php 

		if ($nav == "guardias" or $nav == "supervisores" or $nav == "clientes" or $nav == "crear" or $user_num=='user' or    $nav=='baja_elementos') {
       		$rutaAgregar        = "$ruta/panel/$user_get/baja_elementos";
       		$complemento        = "href='$rutaAgregar'";
       		$variableController = 1;
	    }
	    if ($nav == "inmuebles" or $nav == "crear_inmueble" or $nav == "baja_inmuebles") {
	        $rutaAgregar        = "$ruta/panel/$user_get/baja_inmuebles"; 
	    	$complemento     = "href='$rutaAgregar'";
	    	$variableController = 1;
	    }
	    if($variableController!=1){
	    	$complementoMas = $popover.$opcion_none;
	    }
		
		?>
		<a class='a_limpia' <?php echo "$complemento"; ?>>
              <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
        </a>
		<?php
?>