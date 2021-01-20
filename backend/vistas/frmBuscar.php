<form  method="post" id="frmProd" enctype="multipart/form-data">
  <div class="form-group">
    <label >Nombre del producto :</label>
    <input  name="nombreA" type="text" class="form-control" id="nombreA">
  </div>
  <input type="submit"  id="guardarProducto" value="BUSCAR PRODUCTO">
</form> 
<?php

$crearUsuario = new productosController();
$crearUsuario -> guardarArticuloController2(); 

?>