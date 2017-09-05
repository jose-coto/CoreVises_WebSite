<?php
include_once 'headerUser.php';
?>
<!DOCTYPE html>
<html>
<head>
<title text="Principal"></title>
<meta charset=UTF-8>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" src="view/css/css/icofont.css" />

</head>
<body>
	

	<!-- Permite que salga la opcion de cambiar idioma -->
	<!--<div class="container">
		<div style="margin-left: 82%; padding-top: 8px;">
			<span text="lang.change"></span>: <select id="locales">
				<option value=""></option>
				<option value="en" text="lang.eng"></option>
				<option value="es" text="lang.es"></option>
			</select>
		</div>
	</div>-->
	
	
	<!-- Container (Categories Section) -->
	<div class="container-fluid text-center">
  		<br>
  	
  		<div class="row">
    		<div class="col-sm-4">
      			<h4>Tecnologia</h4>
      			<img class="img-thumbnail img-responsive" src="https://pbs.twimg.com/media/DIZhzV6XgAIdX45.jpg"  height="400" width="300">
      		
    		</div>
    
    		<div class="col-sm-4">
      			<h4>Linea Blanca</h4>
      			<img class="img-thumbnail img-responsive" src="https://www.eixmaragall.com/media/eixmaragall/image/fotos//32_Foto.1494759553.jpg"  height="400" width="300">
      		
    		</div>
    	
    		<div class="col-sm-4">
      			<h4>Ropa</h4>
      			<img class="img-thumbnail img-responsive" src="http://www.sedal.com.co/wp-content/uploads/2014/01/ropa-de-moda.jpg"  height="400" width="300">
      			
    		</div>
                    
                <div class="col-sm-4">
      			<h4>Libros</h4>
      			<img class="img-thumbnail img-responsive" src="http://risingroads.com/wp/wp-content/uploads/2015/01/books4.jpg"  height="400" width="300">
      			
    		</div>
                <div class="col-sm-4">
      			<h4>Muebles</h4>
      			<img class="img-thumbnail img-responsive" src="http://www.schmittfurniture.com/css/1422/SlideShows/Home%20Page/2%20KH%20Casbah%20Sectional.jpg"  height="400" width="300">
      		
    		</div>
                <div class="col-sm-4">
      			<h4>Accesorios</h4>
      			<img class="img-thumbnail img-responsive" src="http://boaccesorios.com/modulos/accesorios/estilos/boho_etnic/5.jpg"  height="400" width="300">
      		
    		</div>
  		</div>

		

	<!-- Script que permite cambiar el idioma -->
	<script type="text/javascript">
		$(document).ready(function() {
			$("#locales").change(function() {
				var selectedOption = $('#locales').val();
				if (selectedOption != '') {
					window.location.replace('Principal?lang=' + selectedOption);
				}
			});
		});
	</script>
	
	<script type="text/javascript">
		$(function(){
			$(".footer").load("/Footer.html");
		});
	</script>
	<script type="text/javascript" src="view/js/script.js"></script>

</body>
</html>

<?php
include_once 'footer.php';
?>

