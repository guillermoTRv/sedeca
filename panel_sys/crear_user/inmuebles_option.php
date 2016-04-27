<?php 
	$option_c = "SELECT id_inmueble,name_inmueble FROM inmuebles";
	$option_e = mysqli_query($enlace,$option_c);
	while ($array_o = mysqli_fetch_array($option_e)) {
			
			$id_inmueble     = $array_o[0];
			$option_inmueble = $array_o[1];

			echo "<option value='$id_inmueble'>$option_inmueble</option>";
	}
?>