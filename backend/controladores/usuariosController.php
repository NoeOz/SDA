<?php
require_once 'backend/modelos/usuariosModel.php';
class usuariosController{

	#GUARDAR ARTICULO
	#-----------------------------------------------------------

	public function guardarUsuarioController(){

		if (isset($_POST["nombreUser"])){

			$datosController = array("nombreUser"=>$_POST["nombreUser"],
				                     "email"=>$_POST["emailUser"],
									 "password"=>$_POST["passwordUser"],
									//    "Idr"=>$_POST["Rol"],
									   "emailE"=>$_POST["emailExtra"],
									   "fechaR"=>$_POST["FRE"],
									   "fechaA"=>$_POST["FAC"],
									   "firmaD"=>$_POST["FirmaD"]);
									   //"depart"=>$_POST["depa"]);
									   
									   

			$respuesta = usuariosModel::guardarUsuarioModel($datosController, "usuarios");

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
//===========INICIO=======================USUARIOO MODEL===============INICIO=======
		public function guardarUsuarioController1(){
			$rool=4;
				if (isset($_POST["nombreUser1"])){

					$datosController = array("nombreUser1"=>$_POST["nombreUser1"],
											 "email"=>$_POST["emailUser1"],
											 "password"=>$_POST["passwordUser1"],
											 "rol"=>$rool);
		
					$respuesta = usuariosModel::guardarUsuarioModel1($datosController, "usuarios");
		
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

			
				public function buscarUsuarioController2(){
					require_once 'backend/modelos/usuariosModel.php';
					if(isset($_POST["nombreUs"])){
				  
					  $datosController = array("nombreUsua"=>$_POST["nombreUs"]);
				  
					  $respuesta=usuariosModel::buscarUsuarioModel($datosController, "usuarios");
				  
					  if($respuesta["nombre"]==$_POST["nombreUs"]){
						echo'<script>
						alert("Usuario Encontrado");
						</script>';
						 
					  }
					  else {
						echo $respuesta;
				  
						echo'<script>
				  
						alert(" Usuario No Encontrado");
				  
						</script>';
						
					  }
				  
				  
					}
				  
				}

				Public function borrarUsuarioController(){

					require_once 'backend/modelos/usuariosModel.php';
					
					if(isset($_GET['idBorrar'])){
					
					  $datosController=array("idUs"=>$_GET["idBorrar"]);
					  $respuesta= usuariosModel::borrarUsuarioModel($datosController,"usuarios");
					
					  if($respuesta == "success")
					  {
						echo'<script>
					
								  swal({
										title:"¡OK!",
										text: "¡Elarticulo ha sido ELIMINADO correctamente!",
										type: "success",
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
									   },
					
									   function(isConfirm){
														   if(isConfirm){
																		  window.location =
																		  "index.php?accion=frmProductos";
																		}
																	  });
							 </script>';
					  }
					}
					
					}


					public function actualizarUsuarioController(){

						if(isset($_POST["nombreUsuarioUpd"])){
						  $datosController = array("idU"=>$_POST["idusuarioUpd"],
												   "emaUs"=>$_POST["emailusuarioUpd"],
												   "nomUs"=>$_POST["nombreUsuarioUpd"],
												   "pass"=>$_POST["claveUsuarioUpd"],
												   "emEx"=>$_POST["emailusuario2Upd"],
												   "fechRe"=>$_POST["fechaRegistUpd"],
												   "fechActu"=>$_POST["fechaActuaUpd"],
												   "firmD"=>$_POST["firmadigUpd"]);
					  
						 $respuesta= usuariosModel::actualizarUsuarioModel($datosController,"usuarios");
					  
						 if($respuesta == "success")
						 {
						   echo'<script>
					   
									 swal({
										   title:"¡OK!",
										   text: "¡Elarticulo ha sido ELIMINADO correctamente!",
										   type: "success",
										   confirmButtonText: "Cerrar",
										   closeOnConfirm: false
										  },
					   
										  function(isConfirm){
															  if(isConfirm){
																			 window.location =
																			 "index.php?accion=frmProductos";
																		   }
																		 });
								</script>';
						 }
						}
					  }

					  public function buscarClienteController(){
						require_once 'backend/modelos/usuariosModel.php';
						if(isset($_POST["nombreCli"])){
					  
						  $datosController = array("nombreClie"=>$_POST["nombreCli"]);
					  
						  $respuesta=usuariosModel::buscarClienteModel($datosController, "clientes");
					  
						  if($respuesta["nombreCliente"]==$_POST["nombreCli"]){
							echo'<script>
							alert("Cliente Encontrado");
							</script>';
							 
						  }
						  else {
							echo $respuesta;
					  
							echo'<script>
					  
							alert(" Cliente No Encontrado");
					  
							</script>';
							
						  }
					  
					  
						}
					  
					  }
					
						public function guardarClienteController(){
					
							if (isset($_POST["nombreCliente"])){
					
								$datosController = array("emailCli"=>$_POST["emailCliente"],
														 "tipoCli"=>$_POST["tipoCliente"],
														 "nomEmp"=>$_POST["nomEmpres"],
														 "rfcCli"=>$_POST["rfcCliente"],
														 "telCli"=>$_POST["telCliente"],
														 "nombreCli"=>$_POST["nombreCliente"]);
														   
														   
					
								$respuesta = usuariosModel::guardarClienteModel($datosController, "clientes");
					
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
							
//===========INICIO============================CLIENTE MODEL===============================INICIO=======
			public function guardarClienteModelController(){
					if (isset($_POST["modNomCli"])){
					
						$datosController = array("modalNomCli"=>$_POST["modNomCli"],
												 "modalRFCCli"=>$_POST["modRFCCli"],
												 "modalTelCli"=>$_POST["modTelCli"],
												 "modalnom"=>$_POST["nombreUser1"],
												 "modalema"=>$_POST["emailUser1"]);
			
						$respuesta = usuariosModel::guardarClienteModalModel($datosController, "clientes");
			
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
				//===========INICIO============INER JOIN CLIENTE-USUARIOO===============INICIO=======
				public function mostrarCliUsuController(){
  
					require_once 'backend/modelos/usuariosModel.php'; 

					  $datosController = array("iduss"=>$_SESSION["idusuario"]);
					
					  $respuesta = usuariosModel::mostrarCliUsModel($datosController);
					
					  echo'  
					  <div class="col-lg-11" style="pading-left:10px">
					  <center><h2> <center>Tabla Usuario-Cliente</center> </h2></center>
					  <div class="table-responsive-sm">          
					  <table class="table table-bordered">
						<thead style="background-color:#e94fa4; color:whithe">
						<tr>
						  <th>Cliente</th>
						  <th>Usuario</th>
						  <th>Nombre del Cliente</th>
						  <th>Usuario</th>
						  <th>Email</th>
						  <th>Teléfono</th>
						  <th>RFC</th>	
						  <th>Eliminar</th>
						  <th>Editar</th>						
						</tr>
						</thead>
						<tbody>';
						
						foreach($respuesta as $row => $item){
						  echo '<tr>
						  <td>'.$item["idCliente"].'</td>
						  <td>'.$item["idUsuario"].'</td>
						  <td>'.$item["nombreCliente"].'</td>
						  <td>'.$item["nombre"].'</td>
						  <td>'.$item["email"].'</td>
						  <td>'.$item["telCliente"].'</td>
						  <td>'.$item["rfc"].'</td>
						  <td><a href="index.php?accion=fromProductos&idBorrar='.$item["idUsuario"].'">Eliminar</a></td>
						  <td><i class="fas fa-edit" ></i></td>
						  
							  
						  </tr>';	
								
						}
						echo '</tbody>
						</table>
						</div>
					
						</div>';
					
					}
				  
					//===========FIN============INER JOIN CLIENTE-USUARIOO===============FIN=======
				
					
						public function mostrarClienteController(){
							
							$respuesta = usuariosModel::mostrarClientesModel("clientes");		
							
							echo '<div class="col-lg-11" style="pading-left:10px">
							<center><h2>Inventario de Clientes</h2></center>
							<div class="table-responsive-sm table table-striped .table-hover">
							<table class="table table-bordered">
							<thead style="background-color:#e94fa4; color:white">
							  <tr>
								  <th>IDCliente</th>
								  <th>Email</th>
								  <th>Tipo Cliente</th>
								  <th>Nombre Empresa</th>
								  <th>RFC</th>
								  <th>Teléfono Cliente</th>
								  <th>Nombre</th>	
								  <th>Eliminar</th>
								  <th>Editar</th>
							   </tr>
							 </thead>
							 <tbody>'; 
							 
							 foreach($respuesta as $row => $item) {
							   echo '<tr>
									 <td>'.$item["idCliente"].'</td>
									 <td>'.$item["email"].'</td>
									 <td>'.$item["tipoCliente"].'</td>
									 <td>'.$item["nombreEmpresa"].'</td>
									 <td>'.$item["rfc"].'</td>
									 <td>'.$item["telCliente"].'</td>
									 <td>'.$item["nombreCliente"].'</td>
									 <td><a href="index.php?accion=frmCli&idBorrar='.$item["idCliente"].'"><i class="far fa-trash-alt"></i></a></td>
									 <td><a href="index.php?accion=ActualizarCli&idCliente='.$item["idCliente"].'"><i class="far fa-edit"></i></td>
									 </tr>';
									}
									echo '</tbody>
									</table>
									</div>
									</div>
							
					
								   </div>';
						}

				public function mostrarUsuarioController(){
			$respuesta = usuariosModel::mostrarUsuariosModel("usuarios");		
			
			echo '<div class="col-lg-11" style="pading-left:10px">
					<center><h2>Inventario de Usuarios</h2></center>
					<div class="table-responsive-sm table table-striped .table-hover">
					<table class="table table-bordered">
					<thead style="background-color:#e94fa4; color:white">
					<tr>
						<th>IDUsuario</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Contraseña</th>
						<th>ID Rol</th>
						<th>Email Extra</th>
						<th>Fecha Registro</th>
						<th>Fecha Actualización</th>
						<th>Firma Digital</th>	
						<th>Eliminar</th>
						<th>Editar</th>
					</tr>
					</thead>
					<tbody>'; 
					
					foreach($respuesta as $row => $item) {
					echo '<tr>
							<td>'.$item["idUsuario"].'</td>
							<td>'.$item["nombre"].'</td>
							<td>'.$item["email"].'</td>
							<td>'.$item["password"].'</td>
							<td>'.$item["idRol"].'</td>
							<td>'.$item["emailExtra"].'</td>
							<td>'.$item["fechaRegistro"].'</td>
							<td>'.$item["fechaActualizacion"].'</td>
							<td>'.$item["firmaDigital"].'</td>
							<td><a href="index.php?accion=frmUsuarios&idBorrar='.$item["idUsuario"].'"><i class="far fa-trash-alt"></i></a></td>
							<td><a href="index.php?accion=ActualizarUsua&idUsuario='.$item["idUsuario"].'"><i class="far fa-edit"></i></td>
							</tr>';
							}
							echo '</tbody>
							</table>
							</div>
							</div>
					

						</div>';
			}

			Public function borrarClienteController(){

				require_once 'backend/modelos/usuariosModel.php';
				
				if(isset($_GET['idBorrar'])){
				
				  $datosController=array("idCli"=>$_GET["idBorrar"]);
				  $respuesta= usuariosModel::borrarClienteModel($datosController,"clientes");
				
				  if($respuesta == "success")
				  {
					echo'<script>
				
							  swal({
									title:"¡OK!",
									text: "¡Elarticulo ha sido ELIMINADO correctamente!",
									type: "success",
									confirmButtonText: "Cerrar",
									closeOnConfirm: false
								   },
				
								   function(isConfirm){
													   if(isConfirm){
																	  window.location =
																	  "index.php?accion=frmProductos";
																	}
																  });
						 </script>';
				  }
				}
			}

				public function actualizarClienteController(){

					if(isset($_POST["nombreClienteUpd"])){
					  $datosController = array("idCli"=>$_POST["idClienteUpd"],
											   "emaCli"=>$_POST["emailClienteUpd"],
											   "tipCli"=>$_POST["tipoClienteUpd"],
											   "nomEmp"=>$_POST["nomEmpresUpd"],
											   "RFC"=>$_POST["rfcClienteUpd"],
											   "telCli"=>$_POST["telClienteUpd"],
											   "nomCli"=>$_POST["nombreClienteUpd"]);
				  
					 $respuesta= usuariosModel::actualizarClienteModel($datosController,"clientes");
				  
					 if($respuesta == "success")
					 {
					   echo'<script>
				   
								 swal({
									   title:"¡OK!",
									   text: "¡Elarticulo ha sido ELIMINADO correctamente!",
									   type: "success",
									   confirmButtonText: "Cerrar",
									   closeOnConfirm: false
									  },
				   
									  function(isConfirm){
														  if(isConfirm){
																		 window.location =
																		 "index.php?accion=frmProductos";
																	   }
																	 });
							</script>';
					 }
					}
				  }


				  public function buscarEmpleadoController(){
					require_once 'backend/modelos/usuariosModel.php';
					if(isset($_POST["nombreEmple"])){
				  
					  $datosController = array("nombreEmp"=>$_POST["nombreEmple"]);
				  
					  $respuesta=usuariosModel::buscarEmpleadoModel($datosController, "empleados");
				  
					  if($respuesta["nombreEmpleado"]==$_POST["nombreEmple"]){
						echo'<script>
						alert("Empleado Encontrado");
						</script>';
						 
					  }
					  else {
						echo $respuesta;
				  
						echo'<script>
				  
						alert(" Empleado No Encontrado");
				  
						</script>';
						
					  }
				  
				  
					}
				  
				  }
				
					public function guardarEmpleadoController(){
				
						if (isset($_POST["nombreEmpleado"])){
				
							$datosController = array("emailEmp"=>$_POST["emailEmpleado"],
													 "nomEmpre"=>$_POST["nomEmpresEmp"],
													 "rfcEmp"=>$_POST["rfcEmpleado"],
													 "telEmple"=>$_POST["telEmpleado"],
													 "nombreEmp"=>$_POST["nombreEmpleado"]);
													   
													   
				
							$respuesta = usuariosModel::guardarEmpleadoModel($datosController, "empleados");
				
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
				
				
					public function mostrarEmpleadoController(){
						$respuesta = usuariosModel::mostrarEmpleadosModel("empleados");		
						
						echo '<div class="col-lg-11" style="pading-left:10px">
						<center><h2>Inventario de Empleados</h2></center>
						<div class="table-responsive-sm table table-striped .table-hover">
						<table class="table table-bordered">
						<thead style="background-color:#e94fa4; color:white">
						  <tr>
							  <th>ID Empleado</th>
							  <th>Email</th>
							  <th>Nombre Empresa</th>
							  <th>RFC</th>
							  <th>Teléfono </th>
							  <th>Nombre</th>
							  <th>Borrar</th>
							  <th>Editar</th>
						   </tr>
						 </thead>
						 <tbody>'; 
						 
						 foreach($respuesta as $row => $item) {
						   echo '<tr>
								 <td>'.$item["idEmpleado"].'</td>
								 <td>'.$item["email"].'</td>
								 <td>'.$item["nombreEmpresa"].'</td>
								 <td>'.$item["rfc"].'</td>
								 <td>'.$item["telEmpleado"].'</td>
								 <td>'.$item["nombreEmpleado"].'</td>
								 <td><a href="index.php?accion=frmEmplea&idBorrar='.$item["idEmpleado"].'"><i class="far fa-trash-alt"></i></a></td>
								 <td><a href="index.php?accion=ActualizarEmple&idEmpleado='.$item["idEmpleado"].'"><i class="far fa-edit"></i></td>
								 </tr>';
								}
								echo '</tbody>
								</table>
								</div>
								</div>
						
				
							   </div>';
					}


			Public function borrarEmpleadoController(){
				
					require_once 'backend/modelos/usuariosModel.php';
					
					if(isset($_GET['idBorrar'])){
					
					  $datosController=array("idEmp"=>$_GET["idBorrar"]);
					  $respuesta= usuariosModel::borrarEmpleadoModel($datosController,"empleados");
					
					  if($respuesta == "success")
					  {
						echo'<script>
					
								  swal({
										title:"¡OK!",
										text: "¡El articulo ha sido ELIMINADO correctamente!",
										type: "success",
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
									   },
					
									   function(isConfirm){
														   if(isConfirm){
																		  window.location =
																		  "index.php?accion=frmProductos";
																		}
																	  });
							 </script>';
					  }
					}
					
					}
				
				public function actualizarEmpleadoController(){
				
					if(isset($_POST["nombreEmpleadoUpd"])){
					  $datosController = array("idEmp"=>$_POST["idEmpleadoUpd"],
											   "emailEmp"=>$_POST["emailEmpleadoUpd"],
											   "nomEmp"=>$_POST["nomEmpresEmpUpd"],
											   "RFC"=>$_POST["rfcEmpleadoUpd"],
											   "telEmp"=>$_POST["telEmpleadoUpd"],
											   "nomEmple"=>$_POST["nombreEmpleadoUpd"]);
				  
					 $respuesta= usuariosModel::actualizarEmpleadoModel($datosController,"empleados");
				  
					 if($respuesta == "success")
					 {
					   echo'<script>
				   
								 swal({
									   title:"¡OK!",
									   text: "¡Elarticulo ha sido ELIMINADO correctamente!",
									   type: "success",
									   confirmButtonText: "Cerrar",
									   closeOnConfirm: false
									  },
				   
									  function(isConfirm){
														  if(isConfirm){
																		 window.location ="index.php?accion=frmProductos";
																	   }
																	 });
							</script>';
					 }
					}
				  }

				  

			public function loginUsuarioController2(){			
				require_once 'backend/modelos/usuariosModel.php';
				if (isset($_POST["emailUser2"])){

					$datosController = array("email2"=>$_POST["emailUser2"],											 
											 "password2"=>$_POST["passwordUser2"]);
											   
		
					$respuesta = usuariosModel::guardarUsuarioModel2($datosController, "usuarios");
		
					if($respuesta["email"]== $_POST["emailUser2"] & $respuesta["password"] == $_POST["passwordUser2"]){
		
						session_start();
						$_SESSION["validar"]=true;
						$_SESSION["nomUsu"]=$respuesta["nombre"];
						$_SESSION["rol"]=$respuesta["idRol"];
						$_SESSION["idusuario"]=$respuesta["idUsuario"];

						echo'<script>
		
						alert("Bienvenido");
		
						</script>';
		
					}
					else{
						echo $respuesta;
						}	
					}// fin del if grande */
				}
	
				public function guardarProveedorController(){

					if (isset($_POST["nombreProveeedor"])){
			
						$datosController = array("nomProve"=>$_POST["nombreProveeedor"],
												 "telProve"=>$_POST["telProveedor"],
												 "PagW"=>$_POST["paginaWeb"],
												 "repreProv"=>$_POST["idRepresentante"]);
												   
												   
			
						$respuesta = usuariosModel::guardarProveedorModel($datosController, "proveedores");
			
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


		public function mostrarProveedorController(){
			$respuesta = usuariosModel::mostrarProveedorModel("proveedores");		
			
			echo '<div class="col-lg-11" style="pading-left:10px">
			<center><h2>Inventario de Proveedores</h2></center>
			<div class="table-responsive-sm table table-striped .table-hover">
			<table class="table table-bordered">
			<thead style="background-color:#e94fa4; color:white">
			<tr>
				<th>IDProveedor</th>
				<th>Nombre Proveedor</th>
				<th>Teléfono Proveedor </th>
				<th>Página Web</th>
				<th>IDRepresentante</th>
				<th>Borrar</th>
				<th>Editar</th>
			</tr>
			</thead>
			<tbody>'; 
			
			foreach($respuesta as $row => $item) {
			echo '<tr>
					<td>'.$item["idProveedor"].'</td>
					<td>'.$item["nombreProveedor"].'</td>
					<td>'.$item["telefonoProveedor"].'</td>
					<td>'.$item["paginaWeb"].'</td>
					<td>'.$item["representante"].'</td>
					<td><a href="index.php?accion=frmProvee&idBorrar='.$item["idProveedor"].'"><i class="far fa-trash-alt"></i></a></td>
					<td><a href="index.php?accion=ActualizarProvee&idProveedor='.$item["idProveedor"].'"><i class="far fa-edit"></i></td>
					</tr>';
					}
					echo '</tbody>
					</table>
					</div>
					</div>
			

				</div>';
		}



				public function actualizarProveedorController(){

					if(isset($_POST["nombreProveeedorUpd"])){
					  $datosController = array("idProv"=>$_POST["idPreveedorUpd"],
											   "nomProve"=>$_POST["nombreProveeedorUpd"],
											   "telProv"=>$_POST["telProveedorUpd"],
											   "PagW"=>$_POST["paginaWebUpd"],
											   "rep"=>$_POST["idRepresentanteUpd"]);
				  
					 $respuesta= usuariosModel::actualizarProveedorModel($datosController,"proveedores");
				  
					 if($respuesta == "success")
					 {
					   echo'<script>
				   
								 swal({
									   title:"¡OK!",
									   text: "¡Elarticulo ha sido ELIMINADO correctamente!",
									   type: "success",
									   confirmButtonText: "Cerrar",
									   closeOnConfirm: false
									  },
				   
									  function(isConfirm){
														  if(isConfirm){
																		 window.location =
																		 "index.php?accion=frmProductos";
																	   }
																	 });
							</script>';
					 }
					}
				  }

			public function buscarProveedorController(){
					require_once 'backend/modelos/usuariosModel.php';
					if(isset($_POST["nombreProve"])){
				  
					  $datosController = array("nombreProve"=>$_POST["nombreProve"]);
				  
					  $respuesta=usuariosModel::buscarProveedorModel($datosController, "proveedores");
				  
					  if($respuesta["nombreProveedor"]==$_POST["nombreProve"]){
						echo'<script>
						alert(" Proveedor Encontrado");
						</script>';
						 
					  }
					  else {
						echo $respuesta;
				  
						echo'<script>
				  
						alert(" Proveedor No Encontrado");
				  
						</script>';
						
					  }
				  
				  
					}
				  
				  }

				  //borrarProvedorCntroller
				  Public function borrarProveedorController(){

					require_once 'backend/modelos/usuariosModel.php';
					
					if(isset($_GET['idBorrar'])){
					
					  $datosController=array("idProv"=>$_GET["idBorrar"]);
					  $respuesta= usuariosModel::borrarProveedorModel($datosController,"proveedores");
					
					  if($respuesta == "success")
					  {
						echo'<script>
					
								  swal({
										title:"¡OK!",
										text: "¡El articulo ha sido ELIMINADO correctamente!",
										type: "success",
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
									   },
					
									   function(isConfirm){
														   if(isConfirm){
																		  window.location =
																		  "index.php?accion=frmProductos";
																		}
																	  });
							 </script>';
					  }
					}
					
				}

				 	
				  
				







	}


?>