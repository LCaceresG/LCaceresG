<?php 

include 'conexion.php';

$documento_id = $_POST["documento_id"];
$numero_documento = $_POST["numero_documento"];
$nombres = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];

$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$telefono_t = $_POST["telefono_t"];
$telefono_h = $_POST["telefono_h"];
$correo = $_POST["email"];
$estado = $_POST["v_estado"];
$municipio = $_POST["v_municipio"];
$parroquia = $_POST["v_parroquia"];

$consulta = "INSERT INTO clientes(documento_id, 
numero_documento,
nombres,
apellidos,
fecha_nacimiento,
estado_id,
municipio_id,
parroquia_id,
direccion,
telefono_habitacion,
telefono_trabajo,
telefono_celular,
correo) VALUES ('$documento_id',
	'$numero_documento',
	'$nombres',
	'$apellidos',
	'$fecha_nacimiento',
	'$estado',
	'$municipio',
	'$parroquia',
	'$direccion',
	'$telefono_h',
	'$telefono_t',
	'$telefono',
	'$correo'
	)";

$consulta_1 = "INSERT INTO `usuarios`(`id`, `cliente_id`, `usuairo`, `clave`) VALUES ([value-1],[value-2],$usuario,$clave)";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombres = '$nombres'");
if (mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
		  alert ("El usuario ya esta registrado");
		  window.history.go(-1)
		  </script>';
	exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM clientes WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0){
	echo '<script>
		  alert ("El correo ya esta registrado");
		  window.history.go(-1)
		  </script>';
	exit;
}

$resultado_0 = $conexion->query($consulta);

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
