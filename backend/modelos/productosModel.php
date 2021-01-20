<?php

require_once "conexion.php";

class productosModel{

	#GUARDAR ARTICULO
	#------------------------------------------------------------
//$datosModel==== ES UN ARRAY QUE LE PASA EL CONTROLADOR Y EL NOMBRE DE LA TABLA 
	public function guardarArticuloModel($datosModel, $tabla){
        $v = $datosModel["costo"] + ($datosModel["costo"] *.10);
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombreProd, marca, costo,origen, descripcion, fechaAdquisicion, precio, foto)
		VALUES (:nom, :mar, :cos, :ori, :des, :fecha, :pre, :fot)");

		$stmt -> bindParam(":nom", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":mar", $datosModel["marca"], PDO::PARAM_STR);
		$stmt -> bindParam(":cos", $datosModel["costo"], PDO::PARAM_STR);
		$stmt -> bindParam(":ori", $datosModel["origen"], PDO::PARAM_STR);
		$stmt -> bindParam(":des", $datosModel["descri"], PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $datosModel["fechaA"], PDO::PARAM_STR);
		$stmt -> bindParam(":pre", $v, PDO::PARAM_STR);
		$stmt -> bindParam(":fot", $datosModel["foto"], PDO::PARAM_STR);
		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();
	}

	#MOSTRAR ARTÍCULOS
	#------------------------------------------------------
	public function mostrarArticulosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT idProducto, nombreProd,marca, costo, origen, descripcion, fechaAdquisicion, precio, foto FROM $tabla ORDER BY idProducto ASC");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();

	}
	#MOSTRAR ARTÍCULOS EN CATALOGO
	#------------------------------------------------------
	public function catalogoProductosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT idProducto, nombreProd,marca, costo, origen, descripcion, fechaAdquisicion, precio, foto FROM $tabla ORDER BY idProducto ASC");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();

	}

	public function guardarArticuloModel2($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombreProd=:nom");

		// se utiliza el array

		$stmt -> bindParam(":nom", $datosModel["nombre2"], PDO::PARAM_STR);

		$stmt -> execute();
		$respuesta = $stmt -> fetch();
		return $respuesta;
		$stmt -> close();


	}


	
	public function bucarArticulosModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE marca=:mar ORDER BY idProducto ASC");
		$stmt -> bindParam(":mar", $datosModel["marca"], PDO::PARAM_STR);
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();


	}


	
	public function borrarProductoModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idProducto = :id");
		$stmt -> bindParam(":id", $datosModel["idPro"], PDO::PARAM_STR);

		if ($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt -> close();

	}

	


	public function addCarritoModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (idProducto, idUsuario, fechaCompra, cantidad) 
		VALUES (:idProduAG, :idUsuaAG, :fechComAG, :cantiAG)");
		$stmt -> bindParam(":idProduAG", $datosModel["IDprodu"], PDO::PARAM_STR);
		$stmt -> bindParam(":idUsuaAG", $datosModel["IDusuarioo"], PDO::PARAM_STR);
		$stmt -> bindParam(":fechComAG", $datosModel["fechaCompra"], PDO::PARAM_STR);
		$stmt -> bindParam(":cantiAG", $datosModel["Cantidaad"], PDO::PARAM_STR);
		
		if ($stmt->execute()){

			return "ok";
		}
		else{
			return "error";
		}
		$stmt -> close();

	}

	
	public function mostrarCarritoModel($datosmodel){

		$stmt = Conexion::conectar()->prepare("SELECT car.idCarrito,
		car.idUsuario, 
		car.fechaCompra, car.cantidad, 
		car.idProducto, prod.nombreProd, prod.marca, 
		prod.precio FROM carrito as car LEFT JOIN productos as prod on prod.idProducto=car.idProducto 
		WHERE (car.idUsuario=:IDUsuaa)");

		$stmt -> bindParam(":IDUsuaa", $datosmodel["idusuarioo"], PDO::PARAM_STR);
		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}

	

	public function buscarPorIDModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM  $tabla WHERE idProducto = :id");
		$stmt -> bindParam(":id", $datosModel, PDO::PARAM_STR);
		$stmt->execute();

		return $stmt -> fetch();
		$stmt -> close();

	}
//====ACTUALIZACION DE PRECIO=======================================================////////////
	public function actualizarArticulosModel($datosModel,$tabla){

		$stmt = conexion :: conectar()->prepare ( "UPDATE
		$tabla SET 	nombreProd = :nom,
					marca = :mar,
					costo = :cost,
					origen =:org,
					precio=:pre,
					descripcion = :des,
					fechaAdquisicion = :fe WHERE idProducto = :id");
		
		$acP = $datosModel["cos"] + ($datosModel["cos"] *.10);
		
		$stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
		$stmt -> bindParam(":nom", $datosModel["nom"], PDO::PARAM_STR);
		$stmt -> bindParam(":mar", $datosModel["mar"], PDO::PARAM_STR);
		$stmt -> bindParam(":cost", $datosModel["cos"], PDO::PARAM_STR);
		$stmt -> bindParam(":org", $datosModel["org"], PDO::PARAM_STR);
		$stmt -> bindParam(":des", $datosModel["des"], PDO::PARAM_STR);
		$stmt -> bindParam(":pre", $acP, PDO::PARAM_STR);
		$stmt -> bindParam(":fe", $datosModel["fech"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "SUCCESS";
		}
		else{
			return "error";
		}
		
		$stmt->close();


	}// fin de actualizarArticuloModel



}

