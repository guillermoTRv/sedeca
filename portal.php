<?php 
    include("ruta.php");

    session_start();
    $type_user   =  $_SESSION['type_user'];

    date_default_timezone_set('America/Mexico_City');
    $fecha                =  date("Y-m-d");
        
    if ($type_user != "administrador") {
        header("Location: $ruta");
    }

    $tipo_usuario_encabezado = $type_user;
    $dato_izquierdo          = $fecha;
    $name_area               = 'Cordinación Agencias'; 

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Ponerle la etiqueta para que google no indexe el contenido-->
    <title>Listado de clientes</title>
    <link href="<?php echo $ruta ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $ruta ?>/css/css_panel.css" rel="stylesheet">
  </head>  
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 contendedor_div">
            <?php 
                include("panel_sys/encabezado_sys.php");
            ?>
            <div class="row" style='margin-bottom:30px;'>
                <br>
                <div class="col-md-10 col-md-offset-1 div_clientes">
                    <div class="col-md-4 col-md-offset-1">
                        <a style='width:170px;' href='<?php echo $ruta ?>/panel/senasica/guardias'class='btn btn-sm btn-ind'>
                            Senasica 
                        </a>
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'>
                            Cobach 
                        </a>
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'>
                            Ceav 
                        </a>
                    </div>
                    <div class="col-md-4 pull-right">
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'>
                            FND 
                        </a>
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'>
                            Banobras 
                        </a>
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'>
                            Innn 
                        </a>
                    </div>
                </div>
            </div>

           
        </div>
      </div>
    </div>
  </body>
</html>

