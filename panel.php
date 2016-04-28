<?php 
   include("ruta.php");
   include("sanitizar.php");
   include("input_toquen.php");
   include("cfg.php");
   include("time_fecha.php");
   include("notificacion_errores.php");

   

   $user_get  = sanitizar($_GET['us']);
   $nav       = sanitizar($_GET['nav']);

   session_start();
   $type_user       =  $_SESSION['type_user'];
   $name_user       =  $_SESSION['name_user'];
   include("panel_sys/datos_encabezado.php");
   include("variables_get.php");
   #podriamos hacer un control de url que solo permita ciertas url y en caso de que no reconozca algun redirgir a una pagina
   $personal_substr = substr($nav,0,8);
   $inmuebles_substr = substr($nav, 0,9);
   $check_substr    = substr($nav,0,5);
   $servicios_substr  = substr($nav,0,9);
   $reportes_substr = substr($nav,0,8);

   $user_substr     = substr($nav,9,4);


   if ($personal_substr == "personal") {
       $personal_nav    =  "personal";
       global $ruta_select;  
       $ruta_select     =  "personal";
   }
   if($inmuebles_substr == "inmuebles"){
       $inmuebles_nav   =  "inmuebles";
       global $ruta_select;
       $ruta_select     =  "inmuebles";
   }
   if ($user_substr == "User") {
       $user_nav    =  "User";
       $ruta_select =  "personal";
   }

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

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Panel de uso</title>

    <link href="<?php echo $ruta ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $ruta ?>/css/css_panel.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="<?php echo $ruta ?>/js/ajax.js"></script>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12 contendedor_div">
          <?php include("panel_sys/encabezado_sys.php"); ?>
          
          <div class="row">
            <div class="col-md-1" style='margin-right:22px;'>
              <?php
                if ($type_user=='administrador') {
                    include("panel_sys/rutas/rutas_admin.php");    
                 }
                if ($type_user=='supervisor') {
                    include("panel_sys/rutas/rutas_supervisor.php");
                 }
                if ($type_user=='guardia') {
                    include("panel_sys/rutas/rutas_guardia.php");
                 } 
              ?>
              
            </div>
            <div class="col-md-10">
              
              <div class="row barra_nav">
                <div class="col-md-3">
                  <?php include("panel_sys/busquedas_select.php"); ?>
                </div>
                <div class="col-md-4">
                  <?php include("panel_sys/opcionesUsuarios/principalOpciones_usuarios.php"); ?>
                    
                </div>
                <div class="col-md-3 col-md-offset-2 pull-right">
                    <form id="form_seccion" method='POST'>
                      <?php 
                        if ($user_get != 'guardia') {
                          ?>
                            <div class="input-group">
                              <input type="search" class="form-control search_sm" placeholder="Search for...">
                              <span class="input-group-btn search_sm">
                                <button class="btn btn-default" type="button" style='height:20px;'>
                                </button>
                              </span>
                            </div>
                          <?php
                        }
                      ?>
                    </form>
                </div>
              </div>
              <div class="row div_pr">
                <?php
                    include("panel_sys/controlador_por_usuarios.php");  
                ?>
              </div>
            </div>
          </div>  
        </div>  
      </div>
    </div>
    <?php echo "
    <script>
      window.onload= function()
      {
        var lista= document.getElementById('consulta-lista-personal');
        lista.onchange = function()
        {
          window.location='$ruta/panel/$user_get/$ruta_select-'+lista.value;
        };
      }
    </script>";
    ?>
  </body>
</html>

