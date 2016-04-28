<?php 
	$user_num = substr($nav,0,4);

		if ($nav == "guardias" or $nav == "supervisores" or $nav == "clientes" or $nav == "crear" or $user_num=='user') {
       		$rutaAgregar        = "$ruta/panel/$user_get/crear";
       		$complementoMas     = "href='$rutaAgregar'";
       		$variableController = 1;
	    }
	    if ($nav == "inmuebles" or $nav == "crear_inmueble") {
	        $rutaAgregar        = "$ruta/panel/$user_get/crear_inmueble"; 
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