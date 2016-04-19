<?php 
	$toquen = addslashes(htmlspecialchars(strip_tags(trim($_POST['tq']))));
	if (empty($toquen)) {
		header("Location: $ruta");
	}

?>