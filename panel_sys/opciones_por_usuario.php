<?php 
	if ($type_user == "administrador") {
		?>
		<a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/$ruta_agregar" ?>">
              <span class='glyphicon glyphicon-plus log_sm_mas'></span>&nbsp;&nbsp;&nbsp;
            </a>
            <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cog log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cloud-download log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-search log_sm'></span>			
		<?php
	}
	if ($type_user == "supervisor") {
		?>
            <span class='glyphicon glyphicon-plus log_sm_mas'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cog log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cloud-download log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-search log_sm'></span>			
		<?php
	}
      if ($type_user == "guardia") {
            ?>
            <span class='glyphicon glyphicon-plus log_sm_mas'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cog log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-cloud-download log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;
            <span class='glyphicon glyphicon-search log_sm'></span>                 
            <?php
      }
?>