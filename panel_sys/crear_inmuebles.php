<div style='border:2px solid #e06000;margin-bottom:20px;'>
	<form id="crear_inmueble" method="post" enctype="multipart/form-data">
	<div class="row" style='padding:10px;'>
		<br>
		<div class="col-md-8 espacio_input">
			<p class='text_label'>Nombre del inmueble</p>
			<input type='text' class='form-control input-sm_user' name='name_txt'>
		</div>

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Cliente</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' name='cliente_slc'>
				<option value=''>--</option>
				<option value='Senasica'>Senasica</option>
				<option value='Cobach'>Cobach</option>
				<option value='Caev'>Caev</option>
			</select>
		</div>
	</div>

	<div class="row" style='padding:10px;margin-top:20px;'>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Calle</p>
			<input type='text' class='form-control input-sm_user' name='calle'>
		</div>

		<div class="col-md-3 espacio_input">
			<p style='text-align:center;' class='text_label'>Num-Interior</p>
			<input type='text' class='form-control input-sm_user' name='num_int'>
		</div>

		<div class="col-md-3 espacio_input">
			<p style='text-align:center;' class='text_label'>Num-Exterior</p>
			<input type='text' class='form-control input-sm_user' name='num_ext'>
		</div>

		<div class="col-md-2 espacio_input">
			<p style='text-align:center;' class='text_label'>Codigo Postal</p>
			<input type='text' class='form-control input-sm_user' name='postal'>
		</div>
	</div>

	<div class="row" style='padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Colonia</p>
			<input type='text' class='form-control input-sm_user' name='colonia'>
		</div>

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Entidad Federativa</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' name='entidad_slc'>
				<option ></option>
			</select>
		</div>

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Delegacion/municipio</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' name='demarcacion_slc'>
				<option>--</option>
			</select>
		</div>

	</div>

	<div  class="row" style='margin-top:20px;padding:10px;'>
		<div class="col-md-8">
				<center>
				<div style='background-color:#151515;margin-top:20px;margin-bottom:13px;border-radius:4px;width:93%;'>
					<p style='text-align:center;color:white;'>Datos de reporte</p>
				</div>
				</center>
				<div class="row">
					<div class="col-md-6 espacio_input">
						<select class='form-control select-sm_user' style='margin-top:-0px;' name=''>
							<option>--</option>
						</select>
					</div>
					<div class="col-md-6 espacio_input">
						<select class='form-control select-sm_user' style='margin-top:-0px;' name=''>
							<option>--</option>
						</select>
					</div>
				</div>
				<div class="row  espacio_input" style='margin-top:20px;'>
					<div class="col-md-12" style='background-color:#E6E6E6;border-radius:5px;'>
						
						<div class="row">
							<div class="col-md-3 col-md-offset-2">
								  <div class="checkbox">
								    <label>
								      <input type="checkbox"> <p style='color:black;'>Check list</p>
								    </label>
								  </div>

							</div>	

							<div class="col-md-5 pull-right">
								  <div class="checkbox">
								    <label>
								      <input type="checkbox"> <p style='color:black;'>Check list</p>
								    </label>
								  </div>

							</div>	
						</div>

					</div>
				</div>
		</div>
		<div class="col-md-4">
			<p class='text_label'>*Referencias</p>
			<textarea class="form-control" rows="3"></textarea>
		</div>

	</div>

  </form>
</div>
<div id="m_v">

</div>