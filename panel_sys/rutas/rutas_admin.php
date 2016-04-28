  <?php 
      $color_icon = "#A4A4A4";
      if ($nav=="guardias") {
          $color_guardia = $color_icon;
      }
      if ($nav=="inmuebles") {
          $color_inm = $color_icon;
      }
  ?>  

  <a href="<?php echo "$ruta/panel/$user_get/guardias" ?>">
    <span class='glyphicon glyphicon-user icon_izq active' <?php echo "style='color:$color_guardia;'" ?>></span>
  </a>
  
  <a href="<?php echo "$ruta/panel/$user_get/inmuebles" ?>">
      <span class='glyphicon glyphicon-home icon_izq' <?php echo "style='color:$color_inm;'" ?>></span>
  </a>
  <a href="<?php echo "$ruta/panel/$user_get/check" ?>">
      <span class='glyphicon glyphicon-list-alt icon_izq'></span>
  </a>
  <a href="<?php echo "$ruta/panel/$user_get/servicios" ?>">
      <span class='glyphicon glyphicon-globe icon_izq' style='margin-top:11px;'></span>
  </a>
  <a href="<?php echo "$ruta/panel/$user_get/reportes" ?>">
      <span class='glyphicon glyphicon-object-align-bottom icon_izq' style='margin-top:17px;'></span>
  </a>