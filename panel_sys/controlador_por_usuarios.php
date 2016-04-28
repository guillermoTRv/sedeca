<?php
	if ($type_user=='administrador') {
			switch ($nav) {
                    case 'personal-guardias':
                        include("panel_sys/listados/listado_guardias.php"); 
                    break;

                    case 'personal-supervisores':
                        include("panel_sys/listados/listado_supervisores.php"); 
                    break;

                    case 'personal-clientes':
                        include("panel_sys/listados/listado_clientes.php"); 
                    break;

                    case 'personal_crear':
                        include("panel_sys/crear_usuarios.php"); 
                    break;

                    case 'personal_bajas':
                        include("panel_sys/eliminar_elementos/listadoGuardias_eliminar.php"); 
                    break;                    



                    case 'inmuebles_listado':
                        include("panel_sys/listados/listado_inmuebles.php"); 
                      break;

                    case 'inmuebles_crear':
                        include("panel_sys/crear_inmuebles.php"); 
                      break;
                      
                    case 'inmuebles_bajas':
                        include("panel_sys/eliminar_elementos/listadoInmuebles_eliminar.php"); 
                    break;


                    case 'check-interno':
                        include("panel_sys/listados/listado_check.php"); 
                      break;

                    case 'servicios':
                        include("panel_sys/servicios.php"); 
                      break;

                    case 'reportes-normales':
                        include("panel_sys/reportes.php"); 
                      break;
                     
    		}	
	}

  if (isset($user_nav)) {
            include("panel_sys/editar_usuario.php");
  }

	if ($type_user=='supervisor') {
      switch ($nav) {
              			case 'asistencia':
              					include("panel_sys/registro_es.php");
              			break;
              				
                    case 'personal':
              					include("panel_sys/listado_personal.php");
              			break;
              				
                    case 'servicios':
                        include("panel_sys/servicios.php"); 
                    break;
                      
                    case 'reportes':
                        include("panel_sys/reportes.php"); 
                    break;
			}
	}
	if ($type_user=='guardia') {
		  switch ($nav) {
				            case 'asistencia':
						          include("panel_sys/registro_es.php");
					          break;
                    
                    case 'reportes':
                      include("panel_sys/reporte_guardia.php"); 
                    break;
			}
	}


?>