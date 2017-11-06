<!DOCTYPE html>
<html>
<head>
<title>Productos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i" rel="stylesheet">
</head>
<body> 
	<ul>
  		<li><a href="productos.php">Productos</a></li>
  		<li><a href="alta_producto.php">Dar de Alta Producto</a></li>
 		<li><a href="login.php">Login</a></li>
 		<li><a href="logout.php">Logout</a></li>
	</ul>
	<div class="main-agileinfo slider ">
		<div class="items-group">
			<div class="item agileits-w3layouts">
				<div class="block text main-agileits"> 
					<span class="circleLight"></span> 
					<!-- login form -->
					<div class="login-form loginw3-agile"> 
						<div class="agile-row">
							<h1>Productos</h1> 
							<div class="login-agileits-top">
								<table class="table_productos">
									<tr>
										<th>Nombre</th>
										<th>Descripción</th>
										<th>Fecha</th>
										<th></th>
									</tr>
								
<?php
session_start();
?>

<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "mudle";
$tbl_name = "producto";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 
$sql = "SELECT * FROM $tbl_name";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 }
 while($row = $result->fetch_array(MYSQLI_ASSOC)){
 echo "<tr><td>".$row['nombre']."</td><td>".$row['descripcion']."</td><td>".$row['fecha_entrega']."</td><td><a type=button class='button' href='subir.php?id_producto=".$row['id_producto']."'>Enviar</a><a type=button class='button' href='ver_producto.php?id_producto=".$row['id_producto']."'>Ver</a><a type=button class='button' href='modificar_producto.php?id_producto=".$row['id_producto']."'>Modificar</a></td></tr>\n";
   echo "<input type='hidden' name='id_producto' value='".$row['id_producto']."'>";
 }
 echo "</table>";

 mysqli_close($conexion); 
 ?>
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