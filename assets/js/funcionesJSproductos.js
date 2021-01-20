/*=============================================
Agregar artículo          
=============================================*/
$(document).ready(function(){
$("#btnAgregarArticulo").click(function(){

	$("#agregarArticulo").toggle(400);

})



/*=============================================
Subir Imagen a través del Input         
=============================================*/
$("#subirFoto").change(function(){

	imagen = this.files[0];

	console.log("imagesita",imagen);

	//Validar tamaño de la imagen

	imagenSize = imagen.size;

	if(Number(imagenSize) > 1000000){

		$("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">El archivo excede el peso permitido, 100kb</div>')

	}

	else{

		$(".alerta").remove();

	}

	// Validar tipo de la imagen

	imagenType = imagen.type;

	if(imagenType == "image/jpeg" || imagenType == "image/png"){

		$(".alerta").remove();
	}

	else{

		$("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">El archivo debe ser formato JPG o PNG</div>')

	}

	/*=============================================
	Mostrar imagen con AJAX       
	=============================================*/
	if(Number(imagenSize) < 2000000 && imagenType == "image/jpeg" || imagenType == "image/png"){

		var datos = new FormData();

		datos.append("imagen", imagen);

		$.ajax({
			url:"./backend/vistas/ajax/gestorArticulos.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function(){

					$("#arrastreImagenArticulo").before('<img src="assets/imagenes/status.gif" id="status">');

				},
			success: function(respuesta){
				console.log('imagen temporal',respuesta);
				
					$("#status").remove();

					if(respuesta == 0){

						$("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">La imagen es inferior a 800px * 400px</div>')

					}else{

						$("#arrastreImagenArticulo").html('<div id="imagenArticulo"><img src="./backend/vistas/'+respuesta.slice(3)+'" class="img-thumbnail"></div>');

					}
				
			}

		})

	}

})



})