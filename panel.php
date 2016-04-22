<?php 
   include("ruta.php");
   include("sanitizar.php");
   include("input_toquen.php");
   include("cfg.php");
   include("time_fecha.php");

   $cliente = sanitizar($_GET['cl']);
   $nav     = sanitizar($_GET['nav']);

   session_start();
   $usuario_sys     =  $_SESSION['usuario_sys'];

   $dato_encabezado = $usuario_sys;
   $dato_derecho    = $cliente;
   $name_area       = 'Cordinación Agencias';

   #podriamos hacer un control de url que solo permita ciertas url y en caso de que no reconozca algun redirgir a una pagina

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Panel de uso</title>

    <link href="<?php echo $ruta ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $ruta ?>/css/css_panel.css" rel="stylesheet">
  </head>
  <body>

    <style type="text/css">
      .icon_izq{font-size: 3.4em;text-align: center;margin-left: 22px;margin-bottom:20px;margin-top:13px;color: black }
      td{color:#F2F2F2;}

    </style>
    <div class="container">
      <div class="row">
        <div class="col-md-12 contendedor_div">
          <?php include("panel_sys/encabezado_sys.php"); ?>
          
          <div class="row">
            <div class="col-md-1" style='margin-right:22px;'>
              <a href="<?php echo "$ruta/panel/$cliente/usuarios" ?>">
                  <span class='glyphicon glyphicon-user icon_izq'></span>
              </a>
              <a href="<?php echo "$ruta/panel/$cliente/inmuebles" ?>">
                  <img src="../../Iconos/Check.png" class='img_log'>
              </a>
              <a href="<?php echo "$ruta/panel/$cliente/check" ?>">
                  <img src="../../Iconos/Inmuebles.png" class='img_log'>
              </a>
              <a href="<?php echo "$ruta/panel/$cliente/servicios" ?>">
                  <span class='glyphicon glyphicon-globe icon_izq' style='margin-top:11px;'></span>
              </a>
              <a href="<?php echo "$ruta/panel/$cliente/reportes" ?>">
                  <span class='glyphicon glyphicon-list-alt icon_izq' style='margin-top:17px;'></span>
              </a>
                

            </div>
            <div class="col-md-10">
              
              <div class="row barra_nav">
                <div class="col-md-3">
                    <form id="form_seccion" method='POST'>
                        <select class="form-control slc_sm">

                        </select>
                    </form>
                </div>
                <div class="col-md-3">
                    <a class='a_limpia' href="<?php echo "$ruta/panel/$cliente/crear" ?>">
                      <span class='glyphicon glyphicon-plus log_sm_mas'></span>&nbsp;&nbsp;&nbsp;
                    </a>
                    <span class='glyphicon glyphicon-trash log_sm_borrar'></span>&nbsp;&nbsp;&nbsp;
                    <span class='glyphicon glyphicon-cog log_sm'></span>&nbsp;&nbsp;&nbsp;
                    <span class='glyphicon glyphicon-cloud-download log_sm'></span>&nbsp;&nbsp;&nbsp;
                    <span class='glyphicon glyphicon-floppy-disk log_sm'></span>&nbsp;&nbsp;&nbsp;
                    <span class='glyphicon glyphicon-envelope log_sm'></span>&nbsp;&nbsp;&nbsp;
                    <span class='glyphicon glyphicon-search log_sm'></span>
                </div>
                <div class="col-md-3 col-md-offset-2 pull-right">
                    <form id="form_seccion" method='POST'>
                        <div class="input-group">
                          <input type="search" class="form-control search_sm" placeholder="Search for...">
                          <span class="input-group-btn search_sm">
                            <button class="btn btn-default" type="button" style='height:20px;'>
                            </button>
                          </span>
                        </div>
                    </form>
                </div>
              </div>
              <div class="row div_pr">
                <?php
                  switch ($nav) {
                    case 'usuarios':
                        include("panel_sys/table_usuarios.php"); 
                    break;

                    case 'crear':
                        include("panel_sys/crear_usuarios.php"); 
                    break;

                    case 'inmuebles':
                        include("panel_sys/table_inmuebles.php"); 
                      break;

                    case 'check':
                        include("panel_sys/table_inmuebles.php"); 
                      break;

                    case 'servicios':
                        include("panel_sys/table_inmuebles.php"); 
                      break;

                    case 'reportes':
                        include("panel_sys/table_inmuebles.php"); 
                      break;
                
                     
                   }  
                ?>
              </div>
            </div>
          </div>  
        </div>  
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>

