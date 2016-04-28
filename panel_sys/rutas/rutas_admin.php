  <?php 
      $color_icon = "#A4A4A4";
      if (isset($personal_nav)){
          $color_guardia = $color_icon;
      }

      if (isset($inmuebles_nav)) {
          $color_inm = $color_icon;
      }
      if (isset($check_nav)) {
          $color_check = $color_icon;
      }
      if (isset($servicios_nav)) {
          $color_serv  = $color_icon;
      }
      if (isset($reportes_nav)) {
          $color_repo  = $color_icon;
      }
  ?>  

  <a href="<?php echo "$ruta/panel/$user_get/personal-guardias" ?>">
    <span class='glyphicon glyphicon-user icon_izq active' <?php echo "style='color:$color_guardia;'" ?>></span>
  </a>
  
  <a href="<?php echo "$ruta/panel/$user_get/inmuebles_listado" ?>">
      <span class='glyphicon glyphicon-home icon_izq' <?php echo "style='color:$color_inm;'" ?>></span>
  </a>
  <a href="<?php echo "$ruta/panel/$user_get/check-interno" ?>">
      <span class='glyphicon glyphicon-list-alt icon_izq' <?php echo "style='color:$color_check;'" ?>></span>
  </a>
  <a href="<?php echo "$ruta/panel/$user_get/servicios" ?>">
      <span class='glyphicon glyphicon-globe icon_izq'  <?php echo "style='color:$color_serv;'" ?>></span>
  </a>
  <a href="<?php echo "$ruta/panel/$user_get/reportes-normales" ?>">
      <span class='glyphicon glyphicon-object-align-bottom icon_izq' <?php echo "style='color:$color_repo;'" ?>></span>
  </a>