<form  method="post" id="frmProd" enctype="multipart/form-data">
  <div class="form-group">
    <label >Nombre del Proveedor :</label>
    <input  name="nombreProve" type="text" class="form-control" id="nombreProve">
  </div>
  <input type="submit"  id="guardarProducto" value="Buscar Proveedor">
</form> 
<?php

$crearUsuario = new usuariosController();
$crearUsuario -> buscarProveedorController(); 

?>