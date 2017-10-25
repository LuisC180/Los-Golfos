<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Enviar Tarea</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i" rel="stylesheet">
</head>
<body> 
	<div class="main-agileinfo slider ">
		<div class="items-group">
			<div class="item agileits-w3layouts">
				<div class="block text main-agileits"> 
					<span class="circleLight"></span> 
					<!-- login form -->
					<div class="login-form loginw3-agile"> 
						<div class="agile-row">
							<h1>Enviar Tarea</h1> 
							<div class="login-agileits-top">
							<?php
							$id_producto = $_POST['id_producto'];
							 ?>
							<form action="cargar.php" method="post" enctype="multipart/form-data"> 	
								<input type="hidden" name="id_producto" value=<?php echo $id_producto?>>
								<p>Numero de Control</p>
								<input type="text" name="nc" maxlength="20" class="name" required>
								<p>Archivo</p>
								<input type="file" name="archivo" value="Seleccionar Archivo" required>
								<br>
								<br>
								<input type="submit" name="Submit" value="Enviar">
							</form> 
							</div> 
							<!--
							<div class="login-agileits-bottom wthree"> 
								<h6><a href="#">Forgot password?</a></h6>
							</div> 
							--> 
						</div>  
					</div>   
				</div>
				<div class="footeragileits">
					<p> &copy; 2017 Derechos Reservados | Los Golfos</a></p>
				</div> 
			</div>   
		</div>
	</div>	 
	<!-- //main --> 
</body>
</html>