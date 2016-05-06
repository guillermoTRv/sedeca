<?php 
	$userBusqueda = "SELECT * FROM usuarios_datos_basicos WHERE id_usuario='$idUser_nav'";
	$userEjecutar = mysqli_query($enlace,$userBusqueda);
	$userArray    = mysqli_fetch_array($userEjecutar);

	
	$nombre_usuario   = $userArray['nombre_g'];
	$apellido_p       = $userArray['apellido_p'];
	$apellido_m       = $userArray['apellido_m'];
	$calle            = $userArray['calle'];
	$colonia          = $userArray['colonia'];
	$num_exterior     = $userArray['num_exterior'];
	$entidad          = $userArray['entidad'];
	$inmueble         = $userArray['inmueble_asign'];

?>	

<div class="row" style='margin-left:10px;margin-right:10px;'>
	<div class="col-md-12" style='padding:16px 13px 13px 18px;border:1px solid white;'>
			<p style='color:#f2f2f2'>Nombre del elemento: <?php echo $nombre_usuario."&nbsp;".$apellido_p."&nbsp".$apellido_m ?> &nbsp;&nbsp; Inmueble asignado: <?php echo $inmueble; ?></p>
			<p style='color:#f2f2f2'>Domicilio <?php echo $calle."&nbsp;".$colonia."&nbsp;".$num_exterior."&nbsp;".$entidad; ?></p>
			<hr>
		<div class="row">
		<div style='color:white;' class="col-md-10">
			Edición de datos 
			<ul style='margin-top:10px;'>
				<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-datosGenerales-".$idUser_nav; ?>">Modificar datos generales</a></li>
				<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-datosUser-".$idUser_nav; ?>">Cambio de contraseña y nombre de usuario</a></li>
				<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-foto-".$idUser_nav; ?>">Cambio de foto</a></li>
				<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-InmuebleUser-".$idUser_nav; ?>">Cambio de Inmueble</a></li>
				<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-condiciones-".$idUser_nav; ?>">Cambio de horario, sueldo, contrato</a></li>
				<li><a class='a_limpia' href="<?php echo "$ruta/panel/$user_get/cambio-Puesto-".$idUser_nav; ?>">Cambio de puesto</a></li>
			</ul>
		</div>
	</div>

	</div>

</div>