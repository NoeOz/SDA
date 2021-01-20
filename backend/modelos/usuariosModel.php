<?php

require_once "conexion.php";

class usuariosModel{

	#GUARDAR ARTICULO
#------------------------------------------------------------

	public function guardarUsuarioModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, password, idRol, emailExtra, fechaRegistro, fechaActualizacion, firmaDigital, departamentoId) 
		VALUES (:nom, :ema, :pass, :rol, :emaExtra, :fr, :fa, :fd, :departamento)");

		$stmt -> bindParam(":nom", $datosModel["nombreUser"], PDO::PARAM_STR);
		$stmt -> bindParam(":ema", $datosModel["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":pass", $datosModel["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":rol", $datosModel["Idr"], PDO::PARAM_STR);
		$stmt -> bindParam(":emaExtra", $datosModel["emailE"], PDO::PARAM_STR);
		$stmt -> bindParam(":fr", $datosModel["fechaR"], PDO::PARAM_STR);
		$stmt -> bindParam(":fa", $datosModel["fechaA"], PDO::PARAM_STR);
		$stmt -> bindParam(":fd", $datosModel["firmaD"], PDO::PARAM_STR);
		$stmt -> bindParam(":departamento", $datosModel["depart"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();
	}
	public function guardarUsuarioModel1($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, password, idRol) 
		VALUES (:nom, :ema, :pass,:rol)");
        
        // se utiliza array

		$stmt -> bindParam(":nom", $datosModel["nombreUser1"], PDO::PARAM_STR);
		$stmt -> bindParam(":ema", $datosModel["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":pass", $datosModel["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":rol", $datosModel["rol"], PDO::PARAM_STR);
		
			if($stmt->execute()){

				return "ok";
			}
	
			else{
	
				return "error";
			}
	
			$stmt->close();
		
		
	}



	public function guardarUsuarioModel2($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where email=:ema");
        
        // se utiliza array

		
		$stmt -> bindParam(":ema", $datosModel["email2"], PDO::PARAM_STR);
		//$stmt -> bindParam(":pass", $datosModel["password2"], PDO::PARAM_STR);
		

		$stmt -> execute();

		$respuesta = $stmt -> fetch();

		return $respuesta;

		$stmt -> close();
	}


//=======--------USUARIOS-------==========//

public function buscarUsuarioModel($datosModel, $tabla){
	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombre=:nom");

	// se utiliza el array

	$stmt -> bindParam(":nom", $datosModel["nombreUsua"], PDO::PARAM_STR);

	$stmt -> execute();
	$respuesta = $stmt -> fetch();
	return $respuesta;
	$stmt -> close();


}


#MOSTRAR Usuarios
#------------------------------------------------------
public function mostrarUsuariosModel($tabla){

	$stmt = Conexion::conectar()->prepare("SELECT idUsuario, nombre,email, password, idRol, emailExtra, fechaRegistro, fechaActualizacion, firmaDigital FROM $tabla ORDER BY idUsuario ASC");
	$stmt -> execute();
	return $stmt -> fetchAll();
	$stmt -> close();

}//fin de mostrarUsuariosModel

#BORRAR Usuarios
#------------------------------------------------------
public function borrarUsuarioModel($datosModel,$tabla){

	$stmt = conexion :: conectar()->prepare("DELETE FROM $tabla WHERE idUsuario = :idUsu");
	$stmt -> bindParam(":idUsu", $datosModel["idUs"],PDO::PARAM_STR);

	if($stmt->execute()){
		return "success";
	}
	else{
		return "error";
	}
	$stmt-> close();

}//fin borrarUsuarioModel

public function buscarporIdModel($datosModel,$tabla){
	$stmt = conexion::conectar() ->prepare("SELECT * FROM $tabla WHERE idUsuario= :idUs");
	$stmt -> bindParam(":idUs", $datosModel,PDO :: PARAM_STR);
	$stmt -> execute();


	return $stmt -> fetch();
	$stmt -> close();
}//fin de buscarporidmodel


public function actualizarUsuarioModel($datosModel,$tabla){

	$stmt = conexion :: conectar()->prepare ( "UPDATE
	$tabla SET email =:emaUs,
	nombre = :nomUs,
	password = :pass,
	emailExtra =:emEx,
	fechaRegistro = :fechRe,
	fechaActualizacion =:fechActu,
	firmaDigital = :fD WHERE idUsuario = :idUs");
	
	$stmt -> bindParam(":idUs", $datosModel["idU"], PDO::PARAM_STR);
	$stmt -> bindParam(":emaUs", $datosModel["emaUs"], PDO::PARAM_STR);
	$stmt -> bindParam(":nomUs", $datosModel["nomUs"], PDO::PARAM_STR);
	$stmt -> bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
	$stmt -> bindParam(":emEx", $datosModel["emEx"], PDO::PARAM_STR);
	$stmt -> bindParam(":fechRe", $datosModel["fechRe"], PDO::PARAM_STR);
	$stmt -> bindParam(":fechActu", $datosModel["fechActu"], PDO::PARAM_STR);
	$stmt -> bindParam(":fD", $datosModel["firmD"], PDO::PARAM_STR);

	if($stmt->execute()){
		return "SUCCESS";
	}
	else{
		return "error";
	}
	
	$stmt->close();


}


//=======--------CLIENTES-------==========//

public function buscarClienteModel($datosModel, $tabla){
$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombreCliente=:nomCli");
$stmt -> bindParam(":nomCli", $datosModel["nombreClie"], PDO::PARAM_STR);

$stmt -> execute();
$respuesta = $stmt -> fetch();
return $respuesta;
$stmt -> close();
}


public function guardarClienteModel($datosModel, $tabla){

$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (email,tipoCliente,nombreEmpresa,rfc,telCliente, nombreCliente) 
VALUES (:ema, :tipCli,:nomEmp, :rfc, :telCli,:nomCli)");

$stmt -> bindParam(":ema", $datosModel["emailCli"], PDO::PARAM_STR);
$stmt -> bindParam(":tipCli", $datosModel["tipoCli"], PDO::PARAM_STR);
$stmt -> bindParam(":nomEmp", $datosModel["nomEmp"], PDO::PARAM_STR);
$stmt -> bindParam(":rfc", $datosModel["rfcCli"], PDO::PARAM_STR);
$stmt -> bindParam(":telCli", $datosModel["telCli"], PDO::PARAM_STR);
$stmt -> bindParam(":nomCli", $datosModel["nombreCli"], PDO::PARAM_STR);

if($stmt->execute()){

	return "ok";
}

else{

	return "error";
}

$stmt->close();
}


public function guardarClienteModalModel($datosModel, $tabla){

	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombreCliente, rfc, telCliente,nombre,email) 
	VALUES (:nomClii, :rfcc, :tlf,:nom,:ema)");
	
	// se utiliza array

	$stmt -> bindParam(":nomClii", $datosModel["modalNomCli"], PDO::PARAM_STR);
	$stmt -> bindParam(":rfcc", $datosModel["modalRFCCli"], PDO::PARAM_STR);
	$stmt -> bindParam(":tlf", $datosModel["modalTelCli"], PDO::PARAM_STR);
	$stmt -> bindParam(":nom", $datosModel["modalnom"], PDO::PARAM_STR);
	$stmt -> bindParam(":ema", $datosModel["modalema"], PDO::PARAM_STR);
	
		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();
	
	
}


public function mostrarClientesModel($tabla){

	$stmt = Conexion::conectar()->prepare("SELECT idCliente,email,tipoCliente,nombreEmpresa,rfc,telCliente,nombreCliente FROM $tabla ORDER BY idCliente ASC");
	$stmt -> execute();
	return $stmt -> fetchAll();
	$stmt -> close();

}
//=========CLIENTE-USUARIO===========//
public function mostrarCliUsModel($datosmodel){

	$stmt = Conexion::conectar()->prepare("SELECT cli.idCliente,
	cli.idUsuario,
	cliUs.nombre,
	cliUs.nombreCliente, 
	cliUs.rfc, cliUs.telCliente, cliUs.email,
	usu.fechaRegistro, usu.fechaActualizacion FROM  clientes as cli 
	LEFT JOIN usuarios as usu on usu.idUsuario=cli.idUsuario
	WHERE ( cliUs.idUsuario= :IdUs)");	

	//( usu.email= :eemail)")

//$stmt -> bindParam(":eemail", $datosmodel["corrMod"], PDO::PARAM_STR);
	$stmt -> bindParam(":IdUs", $datosmodel["iduss"], PDO::PARAM_STR);
	$stmt -> execute();

	return $stmt -> fetchAll();

	$stmt -> close();

}


public function borrarClienteModel($datosModel,$tabla){

	$stmt = conexion :: conectar()->prepare("DELETE FROM $tabla WHERE idCliente = :idCli");
	$stmt -> bindParam(":idCli", $datosModel["idCli"],PDO::PARAM_STR);

	if($stmt->execute()){
		return "success";
	}
	else{
		return "error";
	}
	$stmt-> close();

}

public function buscarporIdModel2($datosModel,$tabla){
	$stmt = conexion::conectar() ->prepare("SELECT * FROM $tabla WHERE idCliente= :idCli");
	$stmt -> bindParam(":idCli", $datosModel,PDO :: PARAM_STR);
	$stmt -> execute();


	return $stmt -> fetch();
	$stmt -> close();
}


public function actualizarClienteModel($datosModel,$tabla){

	$stmt = conexion :: conectar()->prepare ( "UPDATE
	$tabla SET email =:emaCli,
	tipoCliente = :tipCli,
	nombreEmpresa = :nomEmp,
	rfc =:RFC,
	telCliente = :telCli,
	nombreCliente = :nomCli WHERE idCliente = :idCli");
	
	$stmt -> bindParam(":idCli", $datosModel["idCli"], PDO::PARAM_STR);
	$stmt -> bindParam(":emaCli", $datosModel["emaCli"], PDO::PARAM_STR);
	$stmt -> bindParam(":tipCli", $datosModel["tipCli"], PDO::PARAM_STR);
	$stmt -> bindParam(":nomEmp", $datosModel["nomEmp"], PDO::PARAM_STR);
	$stmt -> bindParam(":RFC", $datosModel["RFC"], PDO::PARAM_STR);
	$stmt -> bindParam(":telCli", $datosModel["telCli"], PDO::PARAM_STR);
	$stmt -> bindParam(":nomCli", $datosModel["nomCli"], PDO::PARAM_STR);


	if($stmt->execute()){
		return "SUCCESS";
	}
	else{
		return "error";
	}
	
	$stmt->close();


}

//=======--------EMPLEADO-------==========//

public function buscarEmpleadoModel($datosModel, $tabla){
$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombreEmpleado=:nom");

$stmt -> bindParam(":nom", $datosModel["nombreEmp"], PDO::PARAM_STR);

$stmt -> execute();
$respuesta = $stmt -> fetch();
return $respuesta;
$stmt -> close();
}



public function guardarEmpleadoModel($datosModel, $tabla){

$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (email,nombreEmpresa,rfc,telEmpleado, nombreEmpleado) 
VALUES (:ema,:nomEmp, :rfc, :telEmp,:nomEmplea)");

// se utiliza array

$stmt -> bindParam(":ema", $datosModel["emailEmp"], PDO::PARAM_STR);
$stmt -> bindParam(":nomEmp", $datosModel["nomEmpre"], PDO::PARAM_STR);
$stmt -> bindParam(":rfc", $datosModel["rfcEmp"], PDO::PARAM_STR);
$stmt -> bindParam(":telEmp", $datosModel["telEmple"], PDO::PARAM_STR);
$stmt -> bindParam(":nomEmplea", $datosModel["nombreEmp"], PDO::PARAM_STR);

if($stmt->execute()){

	return "ok";
}

else{

	return "error";
}

$stmt->close();
}


public function mostrarEmpleadosModel($tabla){

	$stmt = Conexion::conectar()->prepare("SELECT idEmpleado,email,nombreEmpresa,rfc,telEmpleado,nombreEmpleado FROM $tabla ORDER BY idEmpleado ASC");
	$stmt -> execute();
	return $stmt -> fetchAll();
	$stmt -> close();

}


public function borrarEmpleadoModel($datosModel,$tabla){

	$stmt = conexion :: conectar()->prepare("DELETE FROM $tabla WHERE idEmpleado = :idEmp");
	$stmt -> bindParam(":idEmp", $datosModel["idEmp"],PDO::PARAM_STR);

	if($stmt->execute()){
		return "success";
	}
	else{
		return "error";
	}
	$stmt-> close();

}



public function buscarporIdModel3($datosModel,$tabla){
	$stmt = conexion::conectar() ->prepare("SELECT * FROM $tabla WHERE idEmpleado= :idEmp");
	$stmt -> bindParam(":idEmp", $datosModel,PDO :: PARAM_STR);
	$stmt -> execute();


	return $stmt -> fetch();
	$stmt -> close();
}


public function actualizarEmpleadoModel($datosModel,$tabla){

	$stmt = conexion :: conectar()->prepare ( "UPDATE
	$tabla SET email =:emailEmp,
	nombreEmpresa = :nomEmp,
	rfc =:RFC,
	telEmpleado = :telEmp,
	nombreEmpleado = :nomEmple WHERE idEmpleado = :idEmp");
	
	$stmt -> bindParam(":idEmp", $datosModel["idEmp"], PDO::PARAM_STR);
	$stmt -> bindParam(":emailEmp", $datosModel["emailEmp"], PDO::PARAM_STR);
	$stmt -> bindParam(":nomEmp", $datosModel["nomEmp"], PDO::PARAM_STR);
	$stmt -> bindParam(":RFC", $datosModel["RFC"], PDO::PARAM_STR);
	$stmt -> bindParam(":telEmp", $datosModel["telEmp"], PDO::PARAM_STR);
	$stmt -> bindParam(":nomEmple", $datosModel["nomEmple"], PDO::PARAM_STR);


	if($stmt->execute()){
		return "SUCCESS";
	}
	else{
		return "error";
	}
	
	$stmt->close();


}


//=======--------PROVEDORES-------==========//
public function buscarProveedorModel($datosModel, $tabla){
	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombreProveedor=:nomPro");



	$stmt -> bindParam(":nomPro", $datosModel["nombreProve"], PDO::PARAM_STR);

	$stmt -> execute();
	$respuesta = $stmt -> fetch();
	return $respuesta;
	$stmt -> close();
}


public function guardarProveedorModel($datosModel, $tabla){

$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombreProveedor,telefonoProveedor,paginaWeb,representante) 
VALUES (:nomProv,:telProv, :PW, :repProv)");


$stmt -> bindParam(":nomProv", $datosModel["nomProve"], PDO::PARAM_STR);
$stmt -> bindParam(":telProv", $datosModel["telProve"], PDO::PARAM_STR);
$stmt -> bindParam(":PW", $datosModel["PagW"], PDO::PARAM_STR);
$stmt -> bindParam(":repProv", $datosModel["repreProv"], PDO::PARAM_STR);

if($stmt->execute()){

	return "ok";
}

else{

	return "error";
}

$stmt->close();
}
public function mostrarProveedorModel($tabla){

	$stmt = Conexion::conectar()->prepare("SELECT idProveedor,nombreProveedor,telefonoProveedor,paginaWeb,representante FROM $tabla ORDER BY idProveedor ASC");
	$stmt -> execute();
	return $stmt -> fetchAll();
	$stmt -> close();

}


public function borrarProveedorModel($datosModel,$tabla){

	$stmt = conexion :: conectar()->prepare("DELETE FROM $tabla WHERE idProveedor = :idProv");
	$stmt -> bindParam(":idProv", $datosModel["idProv"],PDO::PARAM_STR);

	if($stmt->execute()){
		return "success";
	}
	else{
		return "error";
	}
	$stmt-> close();

}


public function buscarporIdModel4($datosModel,$tabla){
	$stmt = conexion::conectar() ->prepare("SELECT * FROM $tabla WHERE idProveedor= :idProv");
	$stmt -> bindParam(":idProv", $datosModel,PDO :: PARAM_STR);
	$stmt -> execute();


	return $stmt -> fetch();
	$stmt -> close();
}


public function actualizarProveedorModel($datosModel,$tabla){

	$stmt = conexion :: conectar()->prepare ( "UPDATE
	$tabla SET nombreProveedor =:nomProve,
	telefonoProveedor = :telProv,
	paginaWeb =:PagW,
	representante = :rep WHERE idProveedor = :idProv");
	
	$stmt -> bindParam(":idProv", $datosModel["idProv"], PDO::PARAM_STR);
	$stmt -> bindParam(":nomProve", $datosModel["nomProve"], PDO::PARAM_STR);
	$stmt -> bindParam(":telProv", $datosModel["telProv"], PDO::PARAM_STR);
	$stmt -> bindParam(":PagW", $datosModel["PagW"], PDO::PARAM_STR);
	$stmt -> bindParam(":rep", $datosModel["rep"], PDO::PARAM_STR);


	if($stmt->execute()){
		return "SUCCESS";
	}
	else{
		return "error";
	}
	
	$stmt->close();


}





}
