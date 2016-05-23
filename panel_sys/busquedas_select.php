	<?php 
    function selected($nav_selected){
        global $nav; 
        if($nav==$nav_selected){ echo " selected"; } 
    }


	if ($type_user == "administrador") {
	
	    include("select/selects_administrador.php");

        
    }

    if ($type_user=="supervisor") {
    	if ($nav == "personal") {
    		?>
            	<select class="form-control select-sm_user" style='margin:0px;'  id='consulta-lista-personal'>
			      	 <option value='normales'>Senasica-Anzures</option>
			      	 <option value='extraordinarios'>Cobach-Bachilleres-1</option>
			   	</select>
            <?php 
    	}
    }

    if ($type_user == "cliente") {
        
        include("select/selects_clientes.php");    

           
    }
    
	?>

   
