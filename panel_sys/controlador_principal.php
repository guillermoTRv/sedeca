<?php
	if ($type_user=='administrador') {
			include("panel_sys/controladores/admin/controlador_principalAdmin.php");

  }
	if ($type_user=='supervisor') {
      switch ($nav) {
              			case 'asistencia':
              					include("panel_sys/registro_es_supervisor.php");
              			break;
              				
                    case 'personal':
              					include("panel_sys/listado_personal.php");
              			break;
              				
                    case 'servicios':
                    break;
                      
                    case 'reportes':
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
  if ($type_user == "cliente") {
      include("panel_sys/controladores/controlador_principalCliente.php");
  }
  
?>