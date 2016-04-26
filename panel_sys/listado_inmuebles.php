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
                        $inmuebles_c = "SELECT id_inmueble,name_inmueble,calle FROM inmuebles ORDER BY id_inmueble DESC";
                        $inmuebles_e = mysqli_query($enlace,$inmuebles_c);
                        while ($array = mysqli_fetch_array($inmuebles_e)) {
                               
                              $nombre = $array['name_inmueble'];
                              $calle  = $array['calle'];

                              echo "
                                <tr>
                                  <td>$nombre</td>
                                  <td>$calle</td>
                                  <td>Mario Manolo</td>
                                  <td><strong><span class='glyphicon glyphicon-asterisk' style='color:green;'></span></strong></td>
                                </tr>
                              ";

                         } 
                      ?>
                    </tbody>
</table>