<form  method="post" id="frmProd" enctype="multipart/form-data">
  <div class="form-group">
    <label >Nombre del Cliente :</label>
    <input  name="nombreCli" type="text" class="form-control" id="nombreCli">
  </div>
  <input type="submit"  id="guardarProducto" value="Buscar Cliente">
</form> 
<?php

$crearUsuario = new usuariosController();
$crearUsuario -> buscarClienteController(); 

?>