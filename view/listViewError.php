<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
<title text="titleList"></title>
<meta charset=UTF-8>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="view/css/stylePanel.css" rel="stylesheet">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Open+Sans">
</head>
<body>
	<!--  Iframe -->
	<div class="header">
	</div>                                               
                                
                                   	
	<div class="container-fluid text-center">
		<br>
		<div class="row">
			<div class="col-sm-2">
				<div class="panel panel-default" id="categoryPanel">
					<div class="panel-heading" id="categoryHeading" text="headerCategoryList">Categories</div>
					<div class="panel-body">
                                            <ul class="list-group">
							<!--for para asignar las categorias que se traen del mvc-->
							<!-- muestra -->
                                                        
                                                        <li class="list-group-item">
                                                            <label class="btn btn-link"></label>Tecnology</li>
							<li class="list-group-item">
                                                            <label class="btn btn-link"></label>Electrodomestics</li>
							<li class="list-group-item">
                                                            <label class="btn btn-link"></label>Clothes</li>
							<li class="list-group-item">
                                                            <label class="btn btn-link"></label>Books</li>
							<li class="list-group-item">
                                                            <label class="btn btn-link"></label>Accessories</li>
                                                        <li class="list-group-item">
                                                            <label class="btn btn-link"></label>Furniture</li>
							</li>
                                                        
						</ul><!-- fin de el menu de categorias -->
					</div><!-- fin del body del panel -->
				</div><!-- fin del panel -->
			</div><!--fin del row de 2 que contiene la categorias  -->
			
			<div class="col-sm-10">
				<div class="panel panel-default" id="principalPanel">
					
				<!--<div if="$!productList.isEmpty()">-->
						<div class="panel-heading" id="principalHeading" text="headerProductList">Productos</div>
						<div class="panel-body">
							<div class="row">
                                                            
                                                            
                                    <div class="panel panel-default" id="productPanel" each="entry,status : $productList">
                                            <div class="panel-heading" text="$entry.name"></div>
                                            <div class="panel-body">
                                            <!-- ejemplo de como se mostraran los productos -->
                                                    
                                            
                                                    <div class="col-sm-4" style="margin-top: 5%; margin-left: 30%;">
                                                            <h4 th:text="${entry.description}">Producto o categoria no encontrado</h4>
                                                    </div>
                                            
                                            
<!--                                            <div class="col-sm-4" style="margin-top: 10%;">
                                               
                                                    </div>-->
                                            
                                           

									</div><!-- panel body-->
                                                                         
								</div><!-- panel panel-default-->
                                                                
							</div><!-- row-->
						</div><!-- panel-body-->
					</div><!-- verificacion que la lista tenga elementos -->
				</div><!--panel panel-default panelPrincipal -->
			<!--</div> col-sm-10 -->
                       
		</div><!-- row-->
		<div th:if="${quantityProducts>5}">
			<div class="container">
				<ul class="pagination">
					<li th:if="${pageActual>0}"><a th:href="@{/List/prev}" name="prev" th:text="#{prevPaginationList}"></a></li>
					<li th:if="${totalPages>pageActual}"><a th:href="@{/List/next}" name="next" th:text="#{nextPaginationList}"></a></li>
				</ul>
			</div>
		</div>
	</div><!-- container-fluid text-center -->
	
	<div class="footer"></div>
        
	
		<!-- Script que permite cambiar el idioma -->
	<script type="text/javascript">
		$(document).ready(function() {
			$("#locales").change(function() {
				var selectedOption = $('#locales').val();
				if (selectedOption != '') {
					window.location.replace('List?lang=' + selectedOption);
				}
			});
		});
	</script>
	
	<script th:inline="javascript">
	var id=[[${busqueda}]]
	$(document).ready(function() {
    $("#locales").change(function () {
        var selectedOption = $('#locales').val();
        if (selectedOption != ''){
            window.location.replace('List?search='+id+'?lang=' + selectedOption);
        }
    });
});
</script>
	<!-- 	Permite cargar el header y footer -->
	<script type="text/javascript" th:src="@{/js/script.js}"></script>
</body>
</html>
<?php
include_once 'footer.php';
?>
