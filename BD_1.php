<?php 

include 'conexion_1.php';
$clave = sha1($_POST["password"]);
//$clave = $_POST['password'];
$usuario = $_POST["usuario"];

$consulta_1 = "INSERT INTO `usuarios`(`usuairo`, `clave`) VALUES ($usuario,$clave)";
$resultado_1 = $conexion->query($consulta_1);  //opcion 1
//echo $result=mysqli_query($conexion,$sql);   opcion 2
 ?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado_1) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="registro.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
