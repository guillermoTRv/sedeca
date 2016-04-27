<form method='post' enctype='multipart/form-data'>
	<div class="row" style='padding:10px;'>
		<br>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Nombres</p>
			<input type='text' class='form-control input-sm_user' name='name_txt'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Apellido paterno</p>
			<input type='text' class='form-control input-sm_user' name='apell_uno'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Apellido materno</p>
			<input type='text' class='form-control input-sm_user' placeholder='apell_dos'>
		</div>

	</div>
	<div class="row" style='padding:10px;'>
		<br>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6 espacio_input">
					<p class='text_label'>Fecha de nacimiento</p>
					<input type='date' class='form-control input-sm_user' name='nacimiento-date'>
				</div>
				<div class="col-md-6 espacio_input">
					<p class='text_label'>Curp</p>
					<input type='text' class='form-control input-sm_user' name='curp_txt'>
				</div>
			</div>
			<div class="row">
				<BR>
				<div class="col-md-6 espacio_input">
					<p class='text_label'>Usuario</p>
					<input type='text' class='form-control input-sm_user' name='usuario_txt'>
				</div>
				<div class="col-md-6 espacio_input">
					<p class='text_label'>Password</p>
					<input type='password' class='form-control input-sm_user' placeholder='pass_txt'>
				</div>
			</div>
			
		</div>
		<div class="col-md-4">
			FOTOGRAFIA
		</div>
	</div>
	<div class="row">
		<center>
		<div style='background-color:#151515;margin-top:20px;border-radius:4px;width:93%;'>
			<p style='text-align:center;color:white;'>Dirección</p>
		</div>
		</center>
	</div>

	<div class="row" style='padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Calle</p>
			<input type='text' class='form-control input-sm_user' name='calle_txt'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Número ext</p>
			<input type='text' class='form-control input-sm_user' name='num_ext'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Numero int</p>
			<input type='text' class='form-control input-sm_user' name='num_int'>
		</div>
	</div>
	<div class="row" style='margin-top:10px;padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class="text_label">Colonia</p>
			<input type='text' class='form-control input-sm_user' name='colonia'>
		</div>
		<div class="col-md-4 espacio_input">
			<p class="text_label">C.P</p>
			<input type='text' class='form-control input-sm_user' name='curp'>
		</div>
		<div class="col-md-4 espacio_input">
			<select class='form-control select-sm_user' name='entidad_slc'>
				<option style='font-size:.7em;'>Entidad Federativa</option>
			</select>
		</div>
	</div>
	<div class="row" style='margin-top:10px;padding:10px;'>
		<div class="col-md-4 espacio_input">
			<select class='form-control select-sm_user' name='estancia_slc'>
				<option>Municipio o Delegacion</option>
			</select>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Mobil</p>
			<input type='text' class='form-control input-sm_user' name='num_mobil'>
		</div>
	</div>
