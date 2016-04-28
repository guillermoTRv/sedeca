	<?php 
        if (isset($personal_nav)){
			?>
				<select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
			      	 <option value='guardias' <?php if($nav=="personal-guardias"){ echo " selected"; } ?>>Guardias</option>
			      	 <option value='supervisores' <?php if($nav=="spersonal-supervisores"){ echo " selected"; } ?>>Supervisores</option>
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



	?>

   
