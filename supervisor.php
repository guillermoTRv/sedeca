<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Panel de Supervisor</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css_panel.css" rel="stylesheet">
  </head>
  <body>
    <style type="text/css">
        .mens_bienvenida{
          text-align:center;
          color:white; 
        }
    </style>

    <div class="container">
      <div class="row">
        <div class="col-md-12 contendedor_div">
          <div class="row" style='margin-bottom:17px;margin-top:10px;'>
            <div class="col-md-6">
                <h2 class='color_orange'>Multiproseg</h2>
            </div>
            <div class="col-md-3 pull-right">
                <h4 class='color_text'>Supervisor</h4>
                <h4 class='color_orange'>Logout</h4>
            </div>
          </div>

          <div class="row" style='background-color:#202122;padding-top:8px;margin-bottom:12px;padding-left:10px;'>
            <div class="col-md-3">
              
            </div>
            <div class="col-md-3 pull-right">
              <p class='color_text' style='font-size:1.25em;'>Gerardo Lopez</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-1" style='margin-right:22px;'>
              <a href="">
                  <img src="Iconos/Inmuebles.png" class='img_log'>
              </a>
              <a href="">
                  <img src="Iconos/Check.png" class='img_log'>
              </a>
              <a href="">
                  <img src="Iconos/Inmuebles.png" class='img_log'>
              </a>
              <a href="">
                  <img src="Iconos/Check.png" class='img_log'>
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
                    <span class='glyphicon glyphicon-plus log_sm_mas'></span>&nbsp;&nbsp;&nbsp;
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
                          <input type="text" class="form-control search_sm" placeholder="Search for...">
                          <span class="input-group-btn search_sm">
                            <button class="btn btn-default" type="button" style='height:20px;'></button>
                          </span>
                        </div>
                    </form>
                </div>
              </div>
              <div class="row div_pr">
                <div>
                  <div class="row" style='background-color:white;margin-left:2px;margin-right:2px;'>
                    <h4>Asistencias</h4>
                  </div>

                  <div class="row" style='margin-top:70px;'>
                      <div class="col-md-5 col-md-offset-2">
                        <a style='width:170px;' href='http://localhost/work/panel.php'class='btn btn-sm btn-ind'><strong> Registrar entrada </strong></a>
                      </div>
                      <div class="col-md-5 pull-right">
                        <a style='width:170px;' href='http://localhost/work/panel.php'class='btn btn-sm btn-ind'><strong> Registrar salida </strong></a>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h3 class='mens_bienvenida' style='text-align:center;'>¡Bienvenido!</h3>
                        <h3 class='mens_bienvenida' style='text-align:center;'>Que tenga un dia muy productivo</h3>
                    </div>
                  </div>

                  <div class="row" style='margin-top:40px;'>
                    <div class="col-md-10 col-md-offset-1">
                      <form id="form_seccion" method='POST'>
                        <select class="form-control slc_check">
                            <option>Check list</option>
                        </select>
                      </form>
                    </div>
                  </div>

                  <div class="row" style="margin-top:30px;">
                    <div class="col-md-10 col-md-offset-1 div_check">
                        <div class="checkbox col-md-4">
                            <label >
                                <input type="checkbox" required>Acepto terminos y condiciones
                            </label>
                        </div>

                        <div class="checkbox col-md-4">
                            <label >
                                <input type="checkbox" required>Acepto terminos y condiciones
                            </label>
                        </div>


                        <div class="checkbox col-md-4">
                            <label >
                                <input type="checkbox" required>Acepto terminos y condiciones
                            </label>
                        </div>

                        <div class="checkbox col-md-4">
                            <label >
                                <input type="checkbox" required>Acepto terminos y condiciones
                            </label>
                        </div>

                        <div class="checkbox col-md-4">
                            <label >
                                <input type="checkbox" required>Acepto terminos y condiciones
                            </label>
                        </div>


                        <div class="checkbox col-md-4">
                            <label >
                                <input type="checkbox" required>Acepto terminos y condiciones
                            </label>
                        </div>



                    </div>
                  </div>

                </div>
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

