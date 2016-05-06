<?php 
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
                        include("panel_sys/crear_user/crear_usuarios.php"); 
                    break;

                    case 'personal_bajas':
                        include("panel_sys/eliminar_elementos/listadoGuardias_eliminar.php"); 
                    break;                    



                    case 'inmuebles_listado':
                        include("panel_sys/listados/listado_inmuebles.php"); 
                      break;

                    case 'inmuebles_crear':
                        include("panel_sys/inmuebles/crear/crear_inmuebles.php"); 
                      break;
                      
                    case 'inmuebles_bajas':
                        include("panel_sys/eliminar_elementos/listadoInmuebles_eliminar.php"); 
                    break;


                    case 'check-interno':
                        include("panel_sys/listados/listado_check.php"); 
                      break;

                    case 'check-externo':
                        include("panel_sys/listados/listado_check.php"); 
                      break;



                    case 'servicios':
                        include("panel_sys/servicios.php"); 
                      break;

                    case 'reportes-normales':
                        include("panel_sys/reportes.php"); 
                      break;

                    case 'reportes-extraordinarios':
                        include("panel_sys/reportes_extraordinarios.php"); 
                      break;
                     
        } 
  

        if (isset($user_nav)) {
                  include("panel_sys/editar_usuario.php");
        }

        if (isset($cambioVar)) {
                  include("panel_sys/controladores/admin/controlador_edicionUsuario.php");
        }
        if (isset($supervisor_nav)) {
                  include("panel_sys/controladores/admin/controlador_edicionSupervisor.php");
        }
        if (isset($inmuebles_datos)) {
                  include("panel_sys/inmuebles/edicion/principal_editarInmueble.php");
        }
        

?>