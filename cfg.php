<?php 
	$servidor  ="localhost";
	$usuario   ="root";
	$password  ="";
	$bd        ="work";

	global $enlace;
	$enlace=mysqli_connect($servidor,$usuario,$password,$bd);

 ?>