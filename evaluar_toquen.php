<?php 
	$toquen = addslashes(htmlspecialchars(strip_tags(trim($_POST['tq']))));
	
	if (empty($toquen)) {
		if (! empty ( $_SERVER [ 'HTTP_X_REQUESTED_WITH' ])  
	     && strtolower ( $_SERVER [ 'HTTP_X_REQUESTED_WITH' ])  ==  'xmlhttprequest' )  { 
	    echo "holas";	$controller = 1; 
		}
		else{
			header("Location: $ruta");	
		}
	}	
?>