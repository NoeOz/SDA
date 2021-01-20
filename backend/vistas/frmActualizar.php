<?php
require_once 'backend/modelos/productosModel.php';

if(isset($_GET["idProduct"]))
{
    $datosController= $_GET["idProduct"];
     //echo $_GET["idProduct"];

    $respuesta= productosModel :: buscarporIdModel($datosController,"Productos");

    if(isset($respuesta))
    {
        echo' <form  method="post" id="frmProd" enctype="multipart/form-data">
        <div class="form-group">
          <label >Nombre:</label>
          <input  name="idArticuloUpd" id="idArticuloUpd" value='.$respuesta["idProducto"].' type="text" class="form-control">
        </div>
        <div class="form-group">
          <label >Nombre:</label>
          <input  name="nombreArticuloUpd" id="nombreArticuloUpd" value='.$respuesta["nombreProd"].' type="text" class="form-control">
        </div>
      
        <div class="form-group">
          <label >Marca:</label>
          <input  name="marcaArticuloUpd" id="marcaArticuloUpd" value='.$respuesta["marca"].' type="text" class="form-control" >
        </div>
        <div class="form-group">
          <label >Costo:</label>
          <input name="costoArticuloUpd"  id="costoArticuloUpd" value='.$respuesta["costo"].' type="text" class="form-control" >
        </div>
        <div class="form-group">
          <label >Origen:</label>
          <input name="origenArticuloUpd" id="origenArticuloUpd" value='.$respuesta["origen"].' type="text" class="form-control" >
        </div>
        <div class="form-group">
          <label >Descripcion:</label>
          <input name="desArticuloUpd"  id="desArticuloUpd" value='.$respuesta["descripcion"].' type="text" class="form-control" >
        </div>
        <div class="form-group">
          <label >Fecha de Adquisicion:</label>
          <input name="fechaArticuloUpd"  id="fechaArticuloUpd" value='.$respuesta["fechaAdquisicion"].' type="date" class="form-control" >
        </div>
        
        <input type="submit"  id="guardarArticulo" value="Guardar Cambios" class="btn btn-primary">
      </form>';
    }
    else{
        echo"SIN INFORMACIÓN";
    }
}

$actualizar = new productosController();
$actualizar -> actualizarArticulosController();

?>