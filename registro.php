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
		<form action="BD.php" method="post" class="form-horizontal" autocomplete="off">

			<div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
				</div>
			</div>

			<div class="form-group">
				<label for="apellido" class="col-sm-2 control-label">Apellido</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escribe tu apellido" required>
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" name="email" class="form-control" id="email" placeholder="Escribe tu email" required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-10">
					<dir class="contenedor-inputs"><label for="documento_id">Tipo de documento de identidad</label> <Br><Br>
					<select name=documento_id id=documento_id>
						<option value="1">V</option>
						<option value="2">E</option>
						<option value="3">J</option>
						<option value="4">P</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="numero_documento" class="col-sm-2 control-label">Numero documento de identidad</label>
				<div class="col-sm-10">
					<input type="text" name="numero_documento" class="form-control" id="numero_documento" placeholder="Escribe tu numero de documento de identidad" required>
				</div>
			</div>

			<div class="form-group">
				<label for="fecha_nacimiento" class="col-sm-2 control-label">Fecha de nacimiento</label>
				<div class="col-sm-10">
					<input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" placeholder="Escribe tu fecha de nacimiento" required>
				</div>
			</div>

			<div class="form-group">
				<label for="direccion" class="col-sm-2 control-label">Direccion</label>
				<div class="col-sm-10">
					<input type="text" name="direccion" class="form-control" placeholder="Direccion" required>
				</div>
			</div>

			<div class="form-group">
				<label for="telefono" class="col-sm-2 control-label">Telefono</label>
				<div class="col-sm-10">
					<input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
				</div>
			</div>
				
			<div class="form-group">
				<label for="telefono_t" class="col-sm-2 control-label">Telefono del trabajo</label>
				<div class="col-sm-10">
					<input type="text" name="telefono_t" class="form-control" placeholder="Telefono de trabajo">
				</div>
			</div>

			<div class="form-group">
				<label for="telefono_h" class="col-sm-2 control-label">Telefono del habitacion</label>
				<div class="col-sm-10">
					<input type="text" name="telefono_h" class="form-control" placeholder="Telefono de habitacion">
				</div>
			</div>

			<div>Selecciona Estado : <select id="v_estado" name="v_estado" class="form_control">
			</select></div>
			<br>
			
			<div>Selecciona Municipio : <select id="v_municipio" name="v_municipio" class="form_control"></select>
			</div>
			<br>

			<div>Selecciona Parroquia : <select id="v_parroquia" name="v_parroquia" class="form_control"></select>
			</div>
			<br>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>