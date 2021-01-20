<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="assets/js/jquery-3.4.1.min.js" ></script>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=devie-width, initial-sacle=1.0">-->
        <meta name="author" content="Ceciah Ismari Trinidad Flores">
        <meta name="description" content="Cosméticos">
        <meta name="keywords" content="html, desarrollo sitio web">
        
        <link rel="stylesheet" href="assets/css/Estilo.css">
        <link rel="stylesheet" href="assets/css/Style_Sheet.css">
        
        <!--============================
         SECCION 1 "ENCABEZADO"
         =============================-->

        <title>Cométicos TonyMoly</title>

        <link rel="icon" href="assets/logo.png">

        <link rel="stylesheet" href="estilos.css">

        <!--<link rel="stylesheet" type="text/css" href="css/alertyfi.css">
        <link rel="stylesheet" type="text/css" href="css/themes/default.css">

        <script type="text/javascript" src="jquery-3.4.1.slim.min.js"></script>

        <script src="alertify.js"></script>-->
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Mandali&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/plugins/sweetAlert2/css/sweetalert2.css">
        <script type="text/javascript" src="assets/plugins/sweetAlert2/js/sweetalert2.js"></script>
    </head>
     
  <body>
  <?php 
        include "backend/vistas/encabezado.php"; 
        include "backend/vistas/navegador.php";
        $mvc = new controladorMenu();
        include  $mvc -> enlacesPaginas();
    ?>
<script type="text/javascript" src="assets/js/funcionesJSproductos.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html> 