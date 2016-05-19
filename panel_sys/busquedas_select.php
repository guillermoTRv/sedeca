	<?php 
	if ($type_user == "administrador") {
	
	
        if (isset($personal_nav)){
			?>
				<select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
			      	 <option value='guardias' <?php if($nav=="personal-guardias"){ echo " selected"; } ?>>Guardias</option>
			      	 <option value='supervisores' <?php if($nav=="personal-supervisores"){ echo " selected"; } ?>>Supervisores</option>
			      	 <option value='clientes' <?php if($nav=="personal-clientes"){ echo " selected"; } ?>>Clientes</option>
			   	</select>
			<?php
		}

        if (isset($inmuebles_nav)) {
            ?>
            	<select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
			      	 <option value='centro' <?php if($nav=="inmuebles-centro"){ echo " selected"; } ?>>Zona centro</option>
			      	 <option value='norte' <?php if($nav=="inmuebles-norte"){ echo " selected"; } ?>>Zona Norte</option>
			      	 <option value='sur' <?php if($nav=="inmuebles-sur"){ echo " selected"; } ?>>Zona Sur</option>
			   	</select>
            <?php
        }

        if (isset($check_nav)) {
            include("varias_funciones/select_empresasCheck.php");
        }

        if (isset($servicios_nav)) {
        	?>
            	<select class="form-control select-sm_user" style='margin:0px;'>
			      	 <option value='interno'>Costos servicios</option>
			   	</select>
            <?php 
        }

        if (isset($reportes_nav)) {
        	?>
            	<select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
			      	 <option value='normales' <?php if($nav=="reportes-normales"){ echo " selected"; } ?>>Normales</option>
			      	 <option value='extraordinarios' <?php if($nav=="reportes-extraordinarios"){ echo " selected"; } ?>>Extraordinarios</option>
			   	</select>
            <?php 
        }

        if (isset($cambioVar)) {
            ?>
                <select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
                     <option>--</option>
                     <option <?php echo "value='User-$varUser'" ?>  value='User'>Regresar a opciones de edición</option>
                </select>
            <?php 
        }
    }

    if ($type_user=="supervisor") {
    	if ($nav == "personal") {
    		?>
            	<select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
			      	 <option value='normales'>Senasica-Anzures</option>
			      	 <option value='extraordinarios'>Cobach-Bachilleres-1</option>
			   	</select>
            <?php 
    	}
    }
	?>

   
