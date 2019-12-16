<html>
<head>
	<title>Registro de cuenta</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script language="javascript" src="js/jquery-3.4.1.min.js"></script>

</head>
<body>
	<div class="row">
		<h3 style="">
	</div>
	<header>
		<a href="Index.php">
		<h2 style="text-align:center">Nuevo Registro</h2>
	</header>

	<a href="Login.php">Iniciar sesion</a>

	<div class="container">
		<form action="BD_1.php" method="post" class="form-horizontal">

			<div class="form-group">
				<label for="usuario" class="col-sm-2 control-label">Usuario</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Escribe tu usuario" required>
				</div>
			</div>

			<div class="form-group">
				<label for="usuario" class="col-sm-2 control-label">clave</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password" name="password" placeholder="Escribe tu clave" required>
				</div>
			</div>


			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Confirmacion de clave</label>
				<div class="col-sm-10">
					<input type="password" name="clave_c" class="form-control" placeholder="confirma clave" required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>

		</form>
	</div>
</body>
</html>