        $(function(){
                $("#btn-guardar").click(function(){
                    var url="../../panel_sys/procesar_inmueble.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#crear_inmueble").serialize(),

                        success:function(data){
                            $("#m_v").html(data);                
                        }

                    });
                    return false;
                });
            });

        $(document).on("change","#inmueble_slc",function(){
                   $("#inmueble_slc option:selected").each(function () {
                    elegid=$(this).val();
                    $.post("../../panel_sys/crear_user/mostrar_supervisor.php", { elegid: elegid }, function(data){
                    $("#supervisor").html(data);
                    
                });
           })
        });