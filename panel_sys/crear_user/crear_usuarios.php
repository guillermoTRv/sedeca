<div style='border:2px solid #e06000;margin-bottom:20px;'>
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs" role="tablist">
			    <li role="presentation"><a class='tab_a' href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos usuarios</a></li>
			    <li role="presentation"><a class='tab_a' href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Datos del servicio</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="tab-content">
	    		<div role="tabpanel" class="tab-pane in active" id="home" style='margin-bottom:20px;'>
	    			<?php include("panel_sys/crear_user/formulario_crear1.php"); ?>
	    		</div>
			    <div role="tabpanel" class="tab-pane" id="profile">
			    	<?php include("panel_sys/crear_user/formulario_crear2.php"); ?>
			    </div>
			    <div id="m_v">
				</div>	

	  		</div>
		</div>
	</div>
</div>