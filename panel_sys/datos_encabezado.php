<?php 
   if ($type_user=='administrador') {
   		 $tipo_usuario_encabezado   = $type_user;
   		 $dato_izquierdo            = $cliente; 
   

       switch ($nav) {
         case 'personal-guardias':  $name_area = "Personal guardias"; break;
         case 'personal-supervisores': $name_area = "Personal Supervisores"; break;
         case 'personal-clientes': $name_area = "Usuarios Clientes"; break;

         case 'personal_crear':     $name_area = "Alta de personal"; break;
         
         case 'personal_bajas': $name_area = "Baja de personal"; break;
         
         case 'inmuebles_listado': $name_area = "Inmuebles"; break;
         case 'inmuebles-norte': $name_area = "Zona norte"; break;
         case 'inmuebles-centro': $name_area = "Zona centro"; break;

         case 'inmuebles-sur': $name_area = "Zona sur"; break;
         case 'inmuebles_crear': $name_area = "Alta de inmueble"; break;
         case 'inmuebles_bajas': $name_area = "Baja de inmueble"; break;
         case 'check-interno': $name_area = "Check interno"; break;

         case 'check-externo': $name_area = "Check externo"; break;
         
         case 'servicios': $name_area = "Costos servicios"; break;
         
         case 'reportes-normales': $name_area = "Reportes normales"; break;
         case 'reportes-extraordinarios': $name_area = "Reportes extraordinarios"; break;
         #case '': $name_area = ""; break;
           
       }

       if (isset($user_nav)) {
         $name_area = "Editar información";
       }


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