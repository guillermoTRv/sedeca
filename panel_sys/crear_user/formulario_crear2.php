<?php 
	function horario(){
		for ($i=0; $i<10 ; $i++) { 
			$horario = "0".$i;
			echo "<option value='$horario'>$horario</option>";
		}
		for ($i=10; $i < 25 ; $i++) { 
			$horario = $i;
			echo "<option value='$horario'>$horario</option>";	
		}
	}
?>


	<div class="row" style='padding:10px;'>
		<br>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Nombre del inmueble</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' id='inmueble_slc'>
				<?php include("inmuebles_option.php"); ?>
			</select>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Supervisor</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;' id='supervisor'>
				<option>--</option>
			</select>
		</div>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Costo del servicio</p>
			<input type='text' class='form-control input-sm_user' placeholder='costo' name='costo'>
		</div>

	</div>
	<div class="row" style='padding:10px;'>
		<div class="col-md-4 espacio_input">
			<p class='text_label'>Turno</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;'>
				<option>--</option>
			</select>
		</div>

		<div class="col-md-4 espacio_input">
			<p style='text-align:center;' class='text_label'>horario de labores</p>
				<div class="col-md-6">
					<select class='form-control select-sm_user' style='margin-top:-0px;'>
						<?php $horas = horario(); ?>
					</select>
				</div>
				<div class="col-md-6">
					<select class='form-control select-sm_user' style='margin-top:-0px;'>
						<?php $horas = horario(); ?>
					</select>
				</div>	
		</div>


		<div class="col-md-4 espacio_input">
			<p class='text_label'>Tipo de pago</p>
			<select class='form-control select-sm_user' style='margin-top:-0px;'>
				<option value=''>--</option>
				<option value='mensual'>Mensual</option>
				<option value='quincenal'>Quincenal</option>
			</select>
		</div>
	</div>

	<div class="row" style='padding:10px;margin-bottom:30px;'>
		

		<div class="col-md-4 espacio_input">
			<p class='text_label'>Fecha de inicio</p>
			<input type='date' class='form-control input-sm_user' placeholder='costo'>
		</div>

		<!--<div class="col-md-4 espacio_input">
			<p class='text_label'>Fecha de finalizacion</p>
			<input disabled type='date' class='form-control input-sm_user' placeholder='costo'>
		</div>-->
	</div>
</form>




