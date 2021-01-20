<?php 
include_once "../../controladores/productosController.php";
include_once "../../modelos/productosModel.php";


class Ajax{

	#SUBIR LA IMAGEN DEL ARTICULO
	#----------------------------------------------------------
	
	public $imagenTemporal;
	public $miIimagenFinal;

	public function gestorArticulosAjax(){

		$datos = $this->imagenTemporal;
		$datosImag = $this->miIimagenFinal;
//echo  $datos;
		$respuesta = productosController::mostrarImagenController($datos);

		echo $respuesta;

	}
}
	
	#OBJETOS
#-----------------------------------------------------------

if(isset($_FILES["imagen"]["tmp_name"])){

//echo "hay imagen";
	$a = new Ajax();
	$a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];
	$a -> miIimagenFinal = $_FILES["imagen"]["name"];
	$a -> gestorArticulosAjax();

}
