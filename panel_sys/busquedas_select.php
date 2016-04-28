	<?php 
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
            ?>
            	<select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
			      	 <option value='interno' <?php if($nav=="check-interno"){ echo " selected"; } ?>>Interno</option>
			      	 <option value='externo' <?php if($nav=="check-externo"){ echo " selected"; } ?>>Externo</option>
			   	</select>
            <?php 
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

	?>

   
