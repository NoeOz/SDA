<?php
 session_start();
?>
<!-- Barra de navegacion  -->
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <!--<a class="navbar-brand" href="#">Menú</a>-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                  <a class="nav-link" href="index.php?accion=catalogo">Inicio<span class="sr-only">(current)</span></a>
                                </li>


                                <!--CONDICIONAL DE PESTAÑAS-->
                                <?php 
                                if(isset($_SESSION["nomUsu"]))
                                {
                                  if($_SESSION["rol"]==1)
                                  {
                                    echo'<li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=frmProductos">Prod</a>
                                         </li>
                                         
                                         <li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=frmUsuarios">Usuario</a>
                                         </li>
                                         
                                         <li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=frmCli">Cliente</a>
                                         </li>

                                         <li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=frmEmplea">Empleado</a>
                                         </li>
                                         
                                         <li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=frmProvee">Provedor</a>
                                         </li>
                                         
                                         <li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=BuscarUsu">BusUsu</a>
                                         </li>

                                         <li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=BuscarCli">BusCli</a>
                                         </li>

                                         <li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=BuscarEmple">BusEmple</a>
                                         </li>
                                         
                                         <li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=BuscarProvee">BusProvee</a>
                                         </li>

                                         <li class="nav-item">
                                         <a class="nav-link" href="index.php?accion=frmCliUsu">CatálogoCli</a>
                                         </li>
                                         ';
                                  }
                                  else if($_SESSION["rol"]==4){
                                    echo'
                                    <li class="nav-item"><!-- MOSTRAR CARRITO  -->
                                    <a class="nav-link" href="index.php?accion=carritoAgregado">MiCarrito</a>
                                    </li>';
                                  }
                                }
                                ?>
                                      
                                
                                <li class="nav-item"><!-- Nueva funcionalidad  -->
                                  <a class="nav-link" href="index.php?accion=frmBuscar">Buscar </a>
                                </li>
                                <li class="nav-item"><!-- Nueva funcionalidad  -->
                                  <a class="nav-link" href="index.php?accion=Marca">BuscarMARCA</a>
                                </li> 
                                <!--<li class="nav-item"> 
                                  <a class="nav-link" href="index.php?accion=carritoAgregado">Carrito</a>
                                </li>-->
                                
                                <!--<li class="nav-item"> 
                                  <a class="nav-link" href="index.php?accion=Salir">CerrarSesión</a>
                                </li>-->
                               
                                <li class="nav-item"><!-- Modal Registro -->
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalReg">Registro</button>
                  
                                </li><br> 
                                
                                <li class="nav-item"><!-- Modal Login -->
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target=".bd-example-modal-sm">Login</button>
                                </li>

                                <!--<li class="nav-item"> 
                                <button type="button" class="btn btn-primary"><a class="btn btn-primary" href="index.php?accion=Salir">Cerrar Sesión</a></button>
                                </li>-->
                                <?php 
                                if(isset($_SESSION["nomUsu"]))
                                {
                                  if($_SESSION["rol"]>0)
                                  {
                                    echo'<button type="button" class="btn btn-light"><a class="btn btn-light" href="index.php?accion=Salir">CerrarSesión</a></button>
                                         </li>
                                         ';
                                  }
                                  else if($_SESSION["rol"]==4){
                                    echo'
                                    <button type="button" class="btn btn-light"><a class="btn btn-primary" href="index.php?accion=Salir">CerrarSesión</a></button>
                                    </li>';
                                  }
                                }
                                ?>
                              </ul>
                             
                            </div>
                    </nav>
            </div>


                    <?php if (isset($_SESSION["nomUsu"])){
  $usu=$_SESSION["nomUsu"];
  $rol=$_SESSION["rol"];
  $idusu=$_SESSION["idusuario"];
 
  echo '<div class="class-lg-12" id="cuenta">'.'<ul><li>
  Usuario:&nbsp'.$usu.'</li></ul></div>';
  //echo '<div class="class-lg-12" id="cuenta">'.'<ul><li>
  //Rol: &nbsp&nbsp&nbsp'.$rol.'</li></ul></div>';
  echo '<div class="class-lg-12" id="cuenta">'.'<ul><li>
  IdUsuario:&nbsp'.$idusu.'</li></ul></div>';
  
}?>
           

<!-- Modal para REGISTRAR USUARIO -->

<div class="modal fade bd-example-modal-xl" id="modalReg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
    <!-- formulario  -->
    <form  method="post" id="frmProd" class="registro">
 <div class="form-group">
    <label for="nombreUser1">Nombre de usuario:</label>
    <input name="nombreUser1" type="text" class="form-control" id="nombreUser1">
  </div>
  <div class="form-group">
    <label for="email1">Email address:</label>
    <input name="emailUser1" type="email" class="form-control" id="emailUser1">
  </div>
  <div class="form-group">
    <label for="pwd1">Password:</label>
    <input name="passwordUser1" type="password" class="form-control" id="passwordUser1">
  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-light" data-toggle="modal" data-target="#DatosCliente">Siguiente</button>
  </div>
  <!-- se deja la clase asi y se tiene que crear una funcion nueva de guardar Usuario Controller1  -->
  <?php
      $crearUsuario = new usuariosController();
      $crearUsuario -> guardarUsuarioController1();
  ?>
</form>
  </div>
</div>
</div> <br> <br>
  

  <!--MODAL DE DATOS DEL CLIENTE-->
<div class="modal fade" id="DatosCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos de Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="registro">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre del Cliente:</label>
            <input type="text" class="form-control" id="modNomCli" name="modNomCli">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Confirma tu correo:</label>
            <input type="text" class="form-control" id="correoMod" name="modRFCCli">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">RFC del Cliente:</label>
            <input type="text" class="form-control" id="modRFCCli" name="modRFCCli">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Teléfono del Cliente:</label>
            <input type="text" class="form-control" id="modTelCli" name="modTelCli">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
        <button  type="submit"  id="guardarUsuario1" class="btn btn-light">Guardar</button>
        <?php
      $crearCLI = new usuariosController();
      $crearCLI -> guardarClienteModelController(); 
      ?>
      </div>
      
      </form>
    </div>
  </div>
</div>

  



<!-- Small modal -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>

 <!-- Modal para iniciar SESIÓN -->

 <form  method="post" id="frmd">
 <div class="form-group">
    <label for="email2">Email address:</label>
    <input name="emailUser2" type="email" class="form-control" id="emailUser2">
  </div>
  <div class="form-group">
    <label for="pwd2">Password:</label>
    <input name="passwordUser2" type="password" class="form-control" id="passwordUser2">
  </div>
  <input type="submit"  id="guardarUsuario2" value="Iniciar Sesión">

  <!-- se deja la clase asi y se tiene que crear una funcion nueva de guardar Usuario Controller1  -->

<?php
$crearUsuario2 = new usuariosController();
$crearUsuario2 -> loginUsuarioController2(); 
?>
  </form>
     
    </div>
  </div>
</div>

