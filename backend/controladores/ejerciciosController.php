<?php
require_once 'backend/modelos/ejerciciosModel.php';
class ejerciciosController{

	#GUARDAR ARTICULO
	#-----------------------------------------------------------

	public function guardarEjerciciosController(){

		if (isset($_POST["iddepa"])){

            $datosController = array("idde"=>$_POST["iddepa"],
                                     "nombreDepa"=>$_POST["nombreDepa"],
				                     "status"=>$_POST["status"],
                                     "descri"=>$_POST["descripcion"],
                                     "fechaR"=>$_POST["fechaRE"],
                                       "fechaA"=>$_POST["fechaAC"]);
                                       

			$respuesta = ejerciciosModel::guardarEjerciciosModel($datosController, "departamentos");

			if($respuesta == "ok"){

				echo'<script>

				alert("registro almacenado");

				</script>';

			}
			else{
				echo $respuesta;
				}	
			}
		}
	}

	?>