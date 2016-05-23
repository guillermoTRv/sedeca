<?php 
    if (isset($personal_nav)){
            ?>
                <select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
                     <option value='guardias'     <?php selected("personal-guardias");     ?>>Guardias</option>
                     <option value='supervisores' <?php selected("personal-supervisores"); ?>>Supervisores</option>
                     <option value='clientes'     <?php selected("personal-clientes");     ?>>Clientes</option>
                </select>
            <?php
        }

        if (isset($inmuebles_nav)) {
            ?>
                <select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
                     <option value='centro' <?php selected("inmuebles-centro");  ?>>Zona centro</option>
                     <option value='norte'  <?php selected("inmuebles-norte");   ?>>Zona Norte</option>
                     <option value='sur'    <?php selected("inmuebles-sur");     ?>>Zona Sur</option>
                </select>
            <?php
        }

        if (isset($check_nav)) {
            include("varias_funciones/select_empresasCheck.php");
        }

        if (isset($servicios_nav)) {
            ?>
                <select class="form-control select-sm_user" style='margin:0px;' id='consulta-lista-personal'>
                     <option value='guardia-1'  <?php selected("servicios-guardia-1");  ?>>Guardia turno 1</option>
                     <option value="guardia-2"  <?php selected("servicios-guardia-2");  ?>>Guardia turno 2</option>
                     <option value="supervisor" <?php selected("servicios-supervisor"); ?>>Supervisor</option>
                </select>
            <?php 
        }

        if (isset($reportes_nav)) {
            ?>
                <select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
                     <option value='normales'        <?php selected("reportes-normales");        ?>>Normales</option>
                     <option value='extraordinarios' <?php selected("reportes-extraordinarios"); ?>>Extraordinarios</option>
                </select>
            <?php 
        }

        if (isset($cambioVar)) {
            ?>
                <select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
                     <option>--</option>
                     <option <?php echo "value='User-$varUser'" ?>  value='User'>Regresar a opciones de edición</option>
                </select>
            <?php 
        }
    
?>