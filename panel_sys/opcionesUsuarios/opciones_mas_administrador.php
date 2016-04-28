<?php 
		
		if (isset($personal_nav)){
			$rutaAgregar        = "$ruta/panel/$user_get/personal_crear";
       		$complementoMas     = "href='$rutaAgregar'";
       		$variableController = 1;
		}

			    
	    if (isset($inmuebles_nav)) {
	        $rutaAgregar        = "$ruta/panel/$user_get/inmuebles_crear"; 
	    	$complementoMas     = "href='$rutaAgregar'";
	    	$variableController = 1;
	    }
	    if($variableController!=1){
	    	$complementoMas = $popover.$opcion_none;
	    }
		
		


		?>
		<a class='a_limpia' <?php echo "$complementoMas" ?>>
              <span class='glyphicon glyphicon-plus log_sm_mas'></span>&nbsp;&nbsp;&nbsp;
        </a>
		<?php
?>