<?php 
    include("ruta.php");

    session_start();
    $usuario_sys   =  $_SESSION['usuario_sys'];

    date_default_timezone_set('America/Mexico_City');
    $fecha                =  date("Y-m-d");
        
    if ($usuario_sys != "administrador") {
        header("Location: $ruta");
    }

    $dato_encabezado = $usuario_sys;
    $dato_derecho    = $fecha;
    $name_area       = 'Cordinación Agencias';


?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Ponerle la etiqueta para que google no indexe el contenido-->
    <title>Listado de clientes</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css_panel.css" rel="stylesheet">
  </head>  
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 contendedor_div">
            <?php 
                include("panel_sys/encabezado_sys.php");
            ?>
            <div class="row">
                <br>
                <div class="col-md-10 col-md-offset-1 div_clientes">
                    <div class="col-md-4 col-md-offset-1">
                        <a style='width:170px;' href='<?php echo $ruta ?>/panel/senasica/usuarios'class='btn btn-sm btn-ind'>
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
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

