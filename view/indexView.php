<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<script src='https://www.google.com/recaptcha/api.js'></script>
<head>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login</title>
</head>

<style>
.body {
	background-color: #E8E8E3;
}

.panel-default>#loginPanel {
	background-color: #FFB50F;
}
</style>

<body class="body">
 
	<div class="row">
		<div class="col-sm-6" align="center">
			<div class="container" style="width: 60%; height: 30%; margin-top: 15%">

			 <form method="post" id="formdata" action="?index=login">
				<div class="panel-default" id="loginPanel">
					<div class="panel-heading" id="loginPanel"
						style="text-align: center">
						<font color="white">Login in to CoreVises</font>
					</div>
					
					<div class="panel-body">
						<div class="form-group" style="max-width: 100%;">
							<div class="input-group">
								<span class="input-group-addon"><i
									class="glyphicon glyphicon-user"></i></span> <input name="email"
									type="email" class="form-control" placeholder="Email"
									required="required">
							</div>
						</div>
						<div class="form-group" style="max-width: 100%;">
							<div class="input-group">
								<span class="input-group-addon"><i
									class="glyphicon glyphicon-lock"></i></span> <input name="password"
									type="password" class="form-control" placeholder="Password"
									required="required">
							</div>
						</div>
						<button type="submit" name="btnlogin" class="btn btn-warning">Login</button>
					</div>
				</div>
				</form> 
			</div>
			
			<div id="exito" style="display: none">Sus datos han sido
				recibidos con éxito.</div>
			<div id="fracaso" style="display: none">Se ha producido un
				error durante el envío de datos.</div>
		</div>
		<div class="col-sm-6" align="center">
			<img class="img-responsive"
				src="view/images/wallpapers/wallpaper2.png">
		</div>
	</div>
	


	
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

