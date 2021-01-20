<?php

class productosController{


#MOSTRAR IMAGEN ARTÍCULO
  #------------------------------------------------------------
  public function mostrarImagenController($datos){


      $aleatorio = mt_rand(100, 999);
      $ruta = "../temp/articulo".$aleatorio.".jpg";
      $rutaFoto ="./bachend/vistas/temp/articulo".$aleatorio.".jpg";
      $origen = imagecreatefromjpeg($datos);
      

      imagejpeg($origen, $ruta);

      echo $ruta;
        
  }


	#GUARDAR ARTICULO
	#-----------------------------------------------------------

	public function guardarArticuloController(){
require_once 'backend/modelos/productosModel.php';
		if(isset($_POST["nombreArticulo"])){

      $imagen = $_FILES["imagen"]["tmp_name"]; //selecciona el archivo
      $aleatorio = mt_rand(100, 999);
      $ruta = "./backend/vistas/temp/articulo".$aleatorio.".jpg";//ruta donde se guardará la imagen
      $origen = imagecreatefromjpeg($imagen); //crea un jpg con el archivo seleccionado
      imagejpeg($origen, $ruta);

			$datosController = array("nombre"=>$_POST["nombreArticulo"],
				                     "marca"=>$_POST["marcaArticulo"],
                               "costo"=>$_POST["costoArticulo"],
                               "origen"=>$_POST["origenArticulo"],
                               "descri"=>$_POST["desArticulo"],
                               "foto"=>$ruta, 
                               "fechaA"=>$_POST["fechaArticulo"]);
                             

			$respuesta = productosModel::guardarArticuloModel($datosController, "productos");

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡El artículo ha sido guardado correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "index.php?accion=frmProductos";
							  } 
					});


				</script>';

			}
			else{

				echo $respuesta;

			}
		}

		}



		#RESPUESTA DE MOSTRAR TODOS LOS ARTICULOS
	#-----------------------------------------------------------

	public function mostrarArticulosController(){

		$respuesta = productosModel::mostrarArticulosModel("productos");		



echo '<div class="col-lg-11" style="pading-left:10px">
  <center><h2>Inventario de Productos</h2></center>
  <div class="table-responsive-sm table table-striped .table-hover">          
  <table class="table table-bordered">
    <thead style="background-color:#c7237d; color:white">
      <tr>
      	<th>IDProducto</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Costo</th>
        <th>Origen</th>
        <th>Descripción</th>
        <th>Fecha Aquisición</th>
        <th>Precio</th>
        <th>Foto</th>
        <th>Borrar</th>
        <th>Actualizar</th>
      </tr>
    </thead>
    <tbody>'; 
    foreach($respuesta as $row => $item) { 
    	
        echo '<tr>
        <td>'.$item["idProducto"].'</td>
        <td>'.$item["nombreProd"].'</td>
        <td>'.$item["marca"].'</td>
        <td>'.$item["costo"].'</td>
        <td>'.$item["origen"].'</td>
        <td>'.$item["descripcion"].'</td>
        <td>'.$item["fechaAdquisicion"].'</td>
        <td>'.$item["precio"].'</td>
        <td>'.$item["foto"].'</td>
        <td><a href="index.php?accion=frmProductos&idBorrar='.$item["idProducto"].'"><i class="far fa-trash-alt"></i></a></td>
        <td><a href="index.php?accion=frmActualizar&idProduct='.$item["idProducto"].'"><i class="far fa-edit"></i></td>

      </tr>';
      }
 echo '</tbody>
  </table>
  </div>
</div>
					

				</div>';

	}

// public function mostrarArticulos1Controller(){

  //   $respuesta = productosModel::mostrarArticulosModel("productos");  
      
//}


public function catalogoProductosController(){
  require_once 'backend/modelos/productosModel.php';
  $respuesta= productosModel::catalogoProductosModel("productos");  

  echo '<div class="contenedor">
  <div class="fila">
  <div class="col-lg-9">
  <div class="fila">';
    foreach($respuesta as $row => $item) { 
      echo ' <div class="col-lg-3">
      <div class="card" style="height:20rem width=60px">
      <img src="'.$item["foto"].'" class="card-img-top" style="height:20rem width=60px">
      <div class="card-body">
      <h5 class= "card-title">'.$item["nombreProd"].'</h5>
      <p class="card-text">$'.$item["costo"].'</p>
      <a href="index.php?accion=carrito&idProd='.$item["idProducto"].'" class="bntCatalogo"><button type="button" class="bntCatalogo">Comprar</button>
      </div>
      </div>
      </div>';
    } 

    echo' </div> 	<!--- fin de fila -->
    </div>
    </div>         <!--- fin de fila -->
    </div>         <!--- fin de contenedor catalogo -->

    <!--- fin de seccion 1-->
    ';


  
}  

public function guardarArticuloController2(){
  require_once 'backend/modelos/productosModel.php';
  if(isset($_POST["nombreA"])){

    $datosController = array("nombre2"=>$_POST["nombreA"]);

    $respuesta=productosModel::guardarArticuloModel2($datosController, "productos");

    if($respuesta["nombreProd"]==$_POST["nombreA"]){
      echo'<script>

      alert("Producto Encontrado");

      </script>';

    }
    else {
      echo $respuesta;

      echo'<script>

      alert(" Producto No Encontrado");

      </script>';
      
    }


  }// fin de if 

}


public function bucarArticulosController(){
  require_once 'backend/modelos/productosModel.php';
  if(isset($_POST["marcaBus"])){
    $datosController = array("marca"=>$_POST["marcaBus"]);

    $respuesta=productosModel::bucarArticulosModel($datosController, "productos");

    echo '<div class="col-lg-11" style="pading-left:10px">
  <center><h2>Inventario de Productos</h2></center>
  <div class="table-responsive-sm table table-striped .table-hover">          
  <table class="table table-bordered">
    <thead style="background-color:#c7237d; color:white">
      <tr>
      	<th>IDProducto</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Costo</th>
        <th>Origen</th>
        <th>Descripción</th>
        <th>Fecha Aquisición</th>
        <th>Precio</th>
        <th>Foto</th>
        <th>Editar</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>'; 
    foreach($respuesta as $row => $item) { 
    	
        echo '<tr>
        <td>'.$item["idProducto"].'</td>
        <td>'.$item["nombreProd"].'</td>
        <td>'.$item["marca"].'</td>
        <td>'.$item["costo"].'</td>
        <td>'.$item["origen"].'</td>
        <td>'.$item["descripcion"].'</td>
        <td>'.$item["fechaAdquisicion"].'</td>
        <td>'.$item["precio"].'</td>
        <td>'.$item["foto"].'</td>
        <td><i class="fas fa-edit"></i></td>
        <td><i class="far fa-trash-alt"></i></td>
      </tr>';
      }
 echo '</tbody>
  </table>
  </div>
</div>
					

				</div>';



}


}

public function borrarProductoController(){
  require_once 'backend/modelos/productosModel.php';
  if(isset($_GET["idBorrar"])){
    $datosController = array("idPro"=>$_GET["idBorrar"]);

    $respuesta=productosModel::borrarProductoModel($datosController, "productos");
      if($respuesta=="success"){
        echo '<script>
                swal({
                  title:  "¡OK!",
                  text: "EL ARTICULO A SIDO ELIMINADO CORRECTAMENTE",
                  type: "¡success!",
                  confirmButtomText: "Cerrar",
                  CloseOnConfirm: false
                },
                function(isConfirm){
                  if (isConfirm){
                    window.loocation="index.php?accion=frmProductos";
                  }
                });
                </script>';
                
      }

  }

}


//--===CARRITO===--//
public function mostrarCarritoController(){
  
  require_once 'backend/modelos/productosModel.php'; 
  
    $datosController = array("idusuarioo"=>$_SESSION["idusuario"]);
  
    $respuesta = productosModel::mostrarCarritoModel($datosController);
  
    echo'  
    <div class="col-lg-11" style="pading-left:10px">
    <center><h2> <center>Carrito</center> </h2></center>
    <div class="table-responsive-sm">          
    <table class="table table-bordered">
      <thead style="background-color:#e94fa4; color:whithe">
      <tr>
        <th>Carrito</th>
        <th>Usuario</th>
        <th>Fecha de Compra</th>
        <th>Cantidad</th>
        <th>idProducto</th>
        <th>Nombre Producto</th>
        <th>Marca</th>
        <th>Precio</th>	
        <th>Eliminar</th>
        <th>Editar</th>						
      </tr>
      </thead>
      <tbody>';
      
      foreach($respuesta as $row => $item){
        echo '<tr>
        <td>'.$item["idCarrito"].'</td>
        <td>'.$item["idUsuario"].'</td>
        <td>'.$item["fechaCompra"].'</td>
        <td>'.$item["cantidad"].'</td>
        <td>'.$item["idProducto"].'</td>
        <td>'.$item["nombreProd"].'</td>
        <td>'.$item["marca"].'</td>
        <td>'.$item["precio"].'</td>
        <td><a href="index.php?accion=fromProductos&idBorrar='.$item["idProducto"].'">Eliminar</a></td>
        <td><i class="fas fa-edit" ></i></td>
        
            
        </tr>';	
              
      }
      echo '</tbody>
      </table>
      </div>
  
      </div>';
  }

  //--===ACTUALIZAR--===//
  public function actualizarArticulosController(){

    if(isset($_POST["nombreArticuloUpd"])){
      $datosController = array("id"=>$_POST["idArticuloUpd"],
                               "nom"=>$_POST["nombreArticuloUpd"],
                               "mar"=>$_POST["marcaArticuloUpd"],
                               "cos"=>$_POST["costoArticuloUpd"],
                               "org"=>$_POST["origenArticuloUpd"],
                               "des"=>$_POST["desArticuloUpd"],
                               "fech"=>$_POST["fechaArticuloUpd"]);
  
     $respuesta= productosModel::actualizarArticulosModel($datosController,"productos");
  
     if($respuesta == "success")
     {
       echo'<script>
   
                 swal({
                       title:"¡OK!",
                       text: "¡Elarticulo ha sido ACTUALIZADO correctamente!",
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
