<table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
                     <thead>
                        <tr>   
                          <th style='color:white;'>Nombre inmueble</th>
                          <th style='color:white;'>Direccion</th>
                          <th style='color:white;'>Supervisor</th>
                          <th style='color:white;'>#</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $inmuebles_c = "SELECT id_inmueble,name_inmueble,calle,colonia,num_exterior,num_interior,demarcacion,supervisor,estado_repo FROM inmuebles ORDER BY id_inmueble DESC";
                        $inmuebles_e = mysqli_query($enlace,$inmuebles_c);
                        while ($array = mysqli_fetch_array($inmuebles_e)) {
                               
                              $nombre        = $array['name_inmueble'];
                              $calle         = $array['calle'];
                              $colonia       = $array['colonia'];
                              $num_exterior  = $array['num_exterior'];
                              $num_interior  = $array['num_interior'];
                              $demarcacion   = $array['demarcacion'];
                              #revisar la codificacion de los campos en las bases de datos


                              $estado_repo   = $array['estado_repo'];
                              $supervisor    = $array['supervisor'];
                              if ($estado_repo == 'si') {global $color; $color = 'green';}
                              if ($estado_repo == 'no') {global $color; $color = '#DF0101';}
                              echo "
                                <tr>
                                  <td>$nombre</td>
                                  <td>$calle $num_exterior $colonia $demarcacion</td>
                                  <td>$supervisor</td>
                                  <td><strong><span class='glyphicon glyphicon-asterisk' style='color:$color;'></span></strong></td>
                                </tr>
                              ";
                         } 
                      ?>
                    </tbody>
</table>