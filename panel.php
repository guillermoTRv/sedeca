<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Panel de uso</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css_panel.css" rel="stylesheet">
  </head>
  <body>


    <div class="container">
      <div class="row">
        <div class="col-md-12 contendedor_div">
          <div class="row" style='margin-bottom:17px;margin-top:10px;'>
            <div class="col-md-6">
                <h2 class='color_orange'>Multiproseg</h2>
            </div>
            <div class="col-md-3 pull-right">
                <h4 class='color_text'>Administrador</h4>
                <h4 class='color_orange'>Logout</h4>
            </div>
          </div>

          <div class="row" style='background-color:#202122;padding-top:8px;margin-bottom:12px;padding-left:10px;'>
            <div class="col-md-3">
              <p class='text_cliente'>Senasica</p>
            </div>
            <div class="col-md-3 pull-right">
              <p class='color_text' style='font-size:1.25em;'>Guardias</p>
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
              <a href="">
                  <img src="Iconos/Inmuebles.png" class='img_log'>
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
                  <table class="table" style='color:#353637;border:1px solid #e06000;border-radius:4px;'>
                     <thead>
                        <tr>   
                          <th>Nombre</th>
                          <th>Edad</th>
                          <th>Domicilio</th>
                          <th>Curp</th>
                          <th>Inmueble</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                        </tr>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                        </tr>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                        </tr>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                        </tr>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                        </tr>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                        </tr>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                        </tr>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                        </tr>
                    </tbody>
                  </table>
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

