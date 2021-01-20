<div id="seccionArticulos" class="col-lg-12 col-md-10 col-sm-9 col-xs-12">
	 <br> <br>
		<button id="btnAgregarArticulo" class="btn btn-info btn-lg">Agregar Artículo</button>


	<div id="agregarArticulo" style="display:none" class="col-lg-8">



<form  method="post" id="frmProd" enctype="multipart/form-data">
  <div class="form-group">
    <label >Nombre:</label>
    <input  name="nombreArticulo" type="text" class="form-control" id="nombreArticulo">
  </div>

  <div class="form-group">
    <label >Marca:</label>
    <input  name="marcaArticulo" type="text" class="form-control" id="marcaArticulo">
  </div>
  <div class="form-group">
    <label >Costo:</label>
    <input name="costoArticulo"   type="text" class="form-control" id="costoArticulo">
  </div>
  <div class="form-group">
    <label >Origen:</label>
    <input name="origenArticulo"   type="text" class="form-control" id="origenArticulo">
  </div>
  <div class="form-group">
    <label >Descripcion:</label>
    <input name="desArticulo"   type="text" class="form-control" id="desArticulo">
  </div>
  <div class="form-group">
    <label >Fecha de Adquisicion:</label>
    <input name="fechaArticulo"   type="date" class="form-control" id="fechaArticulo">
  </div>
  
  <div class="form-group">
    <label>Imagen:</label>
    <input type="file" name="imagen" class="btnArchi" id="subirFoto1" require>
    <p>Tamaño recomendado: 800px = 400px, peso máximo 2MB</p>

    <div id="arrastreImagenArticulo">
    <div ></div>
    </div>

  </div>
  <input type="submit"  id="guardarArticulo" value="Guardar Articulo" class="btn btn-primary">
</form>
</div>
</div>



<?php

$crearArticulo = new productosController();
$crearArticulo -> guardarArticuloController(); 
$mostrarArticulo = new productosController();
$mostrarArticulo -> mostrarArticulosController();
$borarArticulo = new productosController();
$borarArticulo -> borrarProductoController();
?>