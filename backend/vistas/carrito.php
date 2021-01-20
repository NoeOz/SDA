<?PHP
require_once 'backend/modelos/productosModel.php';
    if(isset($_GET["idProd"])){
        $fecha_Actual=date('Y-m-d H:i:s');
            $datosController= array("IDprodu"=>$_GET ["idProd"],
                                    "IDusuarioo"=>$_SESSION["idusuario"],
                                    "Cantidaad"=>1,
                                    "fechaCompra"=>$fecha_Actual);

        $respuesta=productosModel::addCarritoModel($datosController, "carrito");
            if($respuesta == "ok")
            {
            echo'<script>
      
                    alert("Agregando a carrito");
          
                  swal({
                    title:"¡OK!",
                    text: "¡El articulo ha sido agregado correctamente!",
                    type: "success",
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                    },
          
                    function(isConfirm){
                              if(isConfirm){
                                      window.location =
                                      "index.php?accion=Catalogo";
                                    }
                                    });
              </script>';
            }
    }