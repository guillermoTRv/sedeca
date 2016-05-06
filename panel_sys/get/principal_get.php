<?php 
	$user_get  = sanitizar($_GET['us']);
    $nav       = sanitizar($_GET['nav']);


	include("get_idEmpresaAdmin.php");
	include("get_basicosUsuarios.php");
	include("get_edicionUsuarios.php");
	include("get_basicosInmuebles.php");	


	$check_substr       = substr($nav,0,5);
	$servicios_substr   = substr($nav,0,9);
	$reportes_substr    = substr($nav,0,8);
	   
	   
	if ($check_substr== "check") {
	   $check_nav = "check";
	   $ruta_select = "check";
	}
    if ($servicios_substr=="servicios") {
        $servicios_nav = "servicios";
        $ruta_select = "servicios";
    }
    if ($reportes_substr == "reportes") {
        $reportes_nav =  "reportes";
        $ruta_select  =  "reportes";
    }
	   

?>
