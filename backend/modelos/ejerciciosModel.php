<?php

require_once "conexion.php";

class ejerciciosModel{

	#GUARDAR ARTICULO
#------------------------------------------------------------

	public function guardarEjerciciosModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (iddepartamento, nomDepartamento, status, descripcion, fechaRegistro, fechaActualizacion) 
        VALUES (:idd, :nom, :sta, :des, :fr, :fa)");
        
        // se utiliza array
        $stmt -> bindParam(":idd", $datosModel["idde"], PDO::PARAM_STR);
		$stmt -> bindParam(":nom", $datosModel["nombreDepa"], PDO::PARAM_STR);
		$stmt -> bindParam(":sta", $datosModel["status"], PDO::PARAM_STR);
        $stmt -> bindParam(":des", $datosModel["descri"], PDO::PARAM_STR);
        $stmt -> bindParam(":fr", $datosModel["fechaR"], PDO::PARAM_STR);
        $stmt -> bindParam(":fa", $datosModel["fechaA"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();
	}
}