
                  <table class="table table-striped" style='color:#353637;border-radius:4px;border:solid 1px #e06000;'>
                     <thead>
                        <tr>   
                          <th style='color:white;'>Nombre</th>
                          <th style='color:white;'>Edad</th>
                          <th style='color:white;'>Domicilio</th>
                          <th style='color:white;'>Curp</th>
                          <th style='color:white;'>Inmueble</th>
                          <th style='color:white;'>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ondblclick="myFunction()">
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td id='demo'>2</td>
                          <td><strong><span class='glyphicon glyphicon-asterisk' style='color:green;'></span></strong></td>
                        </tr>
                        <?php echo "
                        <script>
                            function myFunction() 
                            {
                                window.location='$ruta/panel/$user_get/user-'+document.getElementById('demo').innerHTML;
                            }
                        </script>
                        " ?>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                          <td><strong><span class='glyphicon glyphicon-asterisk' style='color:green;'></span></strong></td>
                        </tr>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                          <td><strong><span class='glyphicon glyphicon-asterisk' style='color:green;'></span></strong></td>
                        </tr>
                        <tr>
                          <td>Guillermo Villgran</td>
                          <td>20</td>
                          <td>Av 16 de Septiembre No.98 Col. Bonfil</td>
                          <td>RGLSHAJ199607803912</td>
                          <td>Grupo Carso</td>
                          <td><strong><span class='glyphicon glyphicon-asterisk' style='color:green;'></span></strong></td>
                        </tr>
                        
                    </tbody>
                  </table>