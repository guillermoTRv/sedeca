<?php 
	$userBusqueda = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario='$varUser'";
	$userEjecutar = mysqli_query($enlace,$userBusqueda);
	$userArrar    = mysqli_fetch_array($userEjecutar);

	$nombre_usuario   = $userArrar['nombre_g'];
	$apellido_p       = $userArrar['apellido_p'];
	$apellido_m       = $userArrar['apellido_m'];
	$calle            = $userArrar['calle'];
	$colonia          = $userArrar['colonia'];
	$num_exterior     = $userArrar['num_exterior'];
	$entidad          = $userArrar['entidad'];
	$inmueble         = $userArrar['inmueble_asign'];

?>

<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='color:white;padding:16px 13px 13px 18px;border:1px solid white;'>
		<p>
			<?php echo "Nombre del personal: ".$nombre_usuario."&nbsp;".$apellido_p."&nbsp;".$apellido_m ?>
		</p>
		<hr>
		<form>
			<div class="form-group">
		    	<label for="exampleInputEmail1">Puesto a cambiar</label>
		    	<input disabled type="text" class="form-control input-sm" placeholder="Supervisor">
		  	</div>
		  	<button type="button" class="btn btn-default">Aceptar</button>
		</form>		

	</div>
</div>