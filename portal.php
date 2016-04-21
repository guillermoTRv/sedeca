<?php 
    date_default_timezone_set('America/Mexico_City');
    $fecha                =  date("Y-m-d");
    include("ruta.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Ponerle la etiqueta para que google no indexe el contenido-->
    <title>Panel de uso</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css_panel.css" rel="stylesheet">
  </head>  
  <body>
    <style type="text/css">
        .div_clientes{background-color:#353637;margin-bottom:20px;border-radius:5px;padding: 60px;color:white;}
    </style>
    <div class="container">
      <div class="row">
        <div class="col-md-12 contendedor_div">
            <div class="row" style='margin-bottom:17px;margin-top:10px;'>
                <div class="col-md-6">
                    <h2 class='color_orange'>Multiproseg</h2>
                </div>
                <div class="col-md-3 pull-right">
                    <h4 class='color_text'>Administrador</h4>
                    <h4><a class='color_orange_a' href="cerrar_lg.php">Logout</a></h4>
                </div>
            </div>
            <div class="row" style='background-color:#202122;padding-top:8px;margin-bottom:12px;padding-left:10px;'>
                <div class="col-md-3" style='font-size:1.25em;margin-left:35px;'>
                    <p class="color_text">
                        <?php echo $fecha; ?>
                    </p>
                </div>
                <div class="col-md-3 pull-right">
                  <p class='color_text' style='font-size:1.25em;'>Cordinación Agencias</p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 div_clientes">
                    <div class="col-md-4 col-md-offset-1">
                        <a style='width:170px;' href='<?php echo $ruta ?>/panel.php'class='btn btn-sm btn-ind'><strong> Senasica </strong></a>
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'><strong> Cobach </strong></a>
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'><strong> Ceav </strong></a>
                    </div>
                    <div class="col-md-4 pull-right">
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'><strong> FND </strong></a>
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'><strong> Banobras </strong></a>
                        <a disabled style='width:170px;' href='?op=listado'class='btn btn-sm btn-ind'><strong> Innn </strong></a>

                    </div>
                </div>
            </div>

           
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

