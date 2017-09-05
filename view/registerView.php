<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <script src="js/script.js" type="text/javascript"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="view/css/StyleRegister.css" rel="stylesheet">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Open+Sans">
<title>Register</title>
</head>

<style>
.body {
	background-color: #E8E8E3
}

.panel-default>#registerPanel {
	background-color: #FFB50F;
}
</style>

<body class="body">
    
	<div class="row">
		<div class="col-sm-6" align="center">
		<img  class="img-responsive" src="view/images/wallpapers/wallpaper1.png">
		</div>
		<div class="col-sm-6">
			<div class="container"
				style="align-content: center; width: 70%; height: 10%; margin-top: 1.2%">

				<form action="?index=register" method="post"> 
					<div class="panel-default" id="registerPanel">
						<div class="panel-heading" id="registerPanel"
							style="text-align: center">
							<font color="white">Register in to CoreVises</font>
						</div>
						<div class="panel-body">

							<div class="form-group" style="max-width: 100%;">
								<label class="form-group" for="text">Identification
									card:</label> <input name="idCard" type="tel" pattern="[0-9]{9}"  class="form-control"
									placeholder="111111111" required="required">
							</div>
							<div class="form-group" style="max-width: 100%;">
								<label for="text">Name:</label> <input name="name" type="text"
									class="form-control" placeholder="Full name" required="required">
							</div>
							<div class="form-group" style="max-width: 100%;">
								<label for="email">Email:</label> <input name="email"
									type="email" class="form-control"
									placeholder="example@gmail.com" required="required">
							</div>
                                                        <div class="form-group" style="max-width: 100%;">
								<label for="pass">Password:</label> <input name="pass"
                                                                                                           type="password" class="form-control"
									placeholder="xxxxxxxxx" required="required">
							</div>
							<div class="form-group" style="max-width: 100%;">
								<label for="text">Address:</label> <input name="address"
									type="text" class="form-control" placeholder="Full address" required="required">
							</div>
							<div class="form-group" style="max-width: 100%;">
								<label for="phone">Phone number:</label> <input name="phone"
									type="tel" pattern="[1-9]{8}" class="form-control" placeholder="88888888" required="required">
							</div>
							<div class="modal-footer" style="max-width: 100%;">
								<div class="row">
									<div class="col-sm-2" style="border-color: #0E8E99;">
										<button type="submit" name="btnRegister" class="btn btn-warning">
											Sing up</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
                
<div class="footer"></div>	
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
