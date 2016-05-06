<?php 
	

	$userBusqueda = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario='$id_GetSupervisor'";
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
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
			<p style='color:#f2f2f2'>Nombre del elemento: <?php echo $nombre_usuario."&nbsp;".$apellido_p."&nbsp".$apellido_m ?> &nbsp;&nbsp; Inmueble asignado: <?php echo $inmueble; ?></p>
			<p style='color:#f2f2f2'>Domicilio <?php echo $calle."&nbsp;".$colonia."&nbsp;".$num_exterior."&nbsp;".$entidad; ?></p>
			<hr>
		<div class="row">
		<div style='color:white;' class="col-md-10">
			<strong>Edición de datos</strong>
			<p>Cambiar inmuebles asignados</p>
		</div>
	</div>

	</div>

</div>