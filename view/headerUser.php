<!DOCTYPE html>
<html>
<head>
<title text="titleHeader"></title>
<meta charset=UTF-8>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="view/css/stylePanel.css" />
</head>
<body>
	<script src="js/script.js" type="text/javascript"></script>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="#" text="titleHeader">CoreVises</a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li>
						<form method="post" id="formSearch" action="?index=search">
							<div class="row">
								<div class="col-sm-4">
									<input name="search" type="text" class="form-control"
										placeholder="What do you want to search?"
										style="width: 450%; margin-top: 15%"></input>
								</div>
								<div class="col-sm-8">
									<button type="submit" name="btnSearch" class="btn btn-warning"
										style="margin-left: 145%; margin-top: 5%">Search</button>
								</div>
							</div>
						</form>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="?index=singOut">  Sign out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="img-responsive"<img
					src="view/images/slider-carousel/carousel1.jpg">

				<div class="carousel-caption"></div>
			</div>
			<div class="item">
				<img class="img-responsive"<img
					src="view/images/slider-carousel/carousel2.jpg">

				<div class="carousel-caption"></div>
			</div>
			<div class="item">
				<img class="img-responsive"<img
					src="view/images/slider-carousel/carousel3.jpg">

				<div class="carousel-caption"></div>

			</div>

			<!-- Controles de Movimiento -->
			<a class="left carousel-control" href="#myCarousel" role="button"
				data-slide="prev"> <span
				class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a> <a class="right carousel-control" href="#myCarousel" role="button"
				data-slide="next"> <span
				class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


		<script
			src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script type="text/javascript">
		$('#search').animate({
			width : 'toggle'
		}).focus();
	</script>

		<form method="get" action="?index=search" name="xxx">
			<script type="text/javascript">
		(function() {
			$('#btn-search').on('click', function(e) {
				var text = document.getElementById('search').value;



                    if (text == "") {
            e.preventDefault();
                    $('#search').animate({
            width : 'toggle'
            }).focus();
            } else {
            location.href = "List?search=" + text;
                    //href="?index=search" + text;
        <tr th:each="entry,status : ${listaEquipos}">
                                        <a style="color: white;"
                                href=?index=search"(idEquipo=${entry.text})}"
                                th:text="${entry.nombre}"> </a>
                        
                            }
                                });
                                
                        }());
                                </script>
		</form>
</body>
</html>