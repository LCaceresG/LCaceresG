<?php 
	session_start();

	if(isset($_SESSION['user'])){
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
				<div class="col-sm-12">
					<div class="jumbotron">
					<a href="Cerrar.php" class="btn btn-info">Cerrar Sesion</a>
						<h2>BIENVENIDO A BANCO-OZIMANDIAS</h2>
					</div>
				</div>
		</div>
	</div>
</body>
</html>

<?php
} else {
	header("location:Login.php");
	}
 ?>
