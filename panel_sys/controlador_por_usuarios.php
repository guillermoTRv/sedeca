<?php
	if ($type_user=='administrador') {
			switch ($nav) {
                    case 'usuarios':
                        include("panel_sys/listado_personal.php"); 
                    break;

                    case 'crear':
                        include("panel_sys/crear_usuarios.php"); 
                    break;

                    case 'inmuebles':
                        include("panel_sys/listado_inmuebles.php"); 
                      break;

                    case 'crear_inmueble':
                        include("panel_sys/crear_inmuebles.php"); 
                      break;

                    case 'check':
                        include("panel_sys/check.php"); 
                      break;

                    case 'servicios':
                        include("panel_sys/servicios.php"); 
                      break;

                    case 'reportes':
                        include("panel_sys/reportes.php"); 
                      break;
                     
    		}	
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