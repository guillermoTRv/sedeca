<?php 
   if ($type_user=='administrador') {
   		 $tipo_usuario_encabezado = $type_user;
   		 $dato_izquierdo            = $cliente;
   		 $name_area               = 'Cordinación Agencias'; 
   }
   if ($type_user=='supervisor') {
   		 $tipo_usuario_encabezado = $type_user;
   		 $dato_izquierdo          = "";
   		 $name_area               = $name_user; 
   }
   if ($type_user=='guardia') {
          $tipo_usuario_encabezado = $type_user;
          $dato_izquierdo          = "";
          $name_area               = $name_user; 
   }
  
?>