<?php 
	$personal_substr    = substr($nav,0,8);
	   if ($personal_substr == "personal") {
	       $personal_nav    =  "personal";
	       global $ruta_select;  
	       $ruta_select     =  "personal";
	   }

	   

	   
	   $user_substr        =  substr($nav,9,4); #extrae lo de user

	   if ($user_substr == "User") {
	       $user_nav           =  "User";
	       $ruta_select        =  "personal";
	       $idUser_nav         =  substr($nav,14,5); #extrae lo la id del usuario
	   }

	   


	   $supervisor_substr  = substr($nav,0,10); #se busca si la id es de un supervisor
	   if ($supervisor_substr == "supervisor") {
	       $supervisor_nav = "supervisor";
	       $id_GetSupervisor = substr($nav,16,4);
	   }

?>