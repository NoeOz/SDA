<form  method="post" id="frmd">
 <div class="form-group">
    <label for="email2">Email address:</label>
    <input name="emailUser2" type="email" class="form-control" id="emailUser2">
  </div>
  <div class="form-group">
    <label for="pwd2">Password:</label>
    <input name="passwordUser2" type="password" class="form-control" id="passwordUser2">
  </div>
  <input type="submit"  id="guardarUsuario2" value="Guardar Usuario">

  <!-- se deja la clase asi y se tiene que crear una funcion nueva de guardar Usuario Controller1  -->

  <?php

$crearUsuario2 = new usuariosController();
$crearUsuario2 -> guardarUsuarioController2(); 

?>



  </form>