<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script type="js/bootstrap.min.js"></script>

	<title>Inicio de sesion</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<div class="container">

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<a href="Index.php" class="btn btn-primary">Iniciar Sesion</a>
				<div class="panel panel-body">
					
					<label>Usuario</label>
					<input type="text" id="usuario" class="form-control input-sm" name="usuario">
					
					<label>Password</label>
					<input type="password" id="password" class="form-control input-sm" name="password">
					
					<span class="btn btn-primary" id="entrarSistema">Entrar</span>
					<a href="registro.php" class="btn btn-danger">Registro</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){ 

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();
				$.ajax({
					type:"POST",
					url:"php/BD_0.php",
					data:cadena,
					success:function(r){
					if(r==1){
						window.location="inicio.php";
					}else{
						alertify.alert("No puedes entrar");
					}
				}
				});
		});	
	});
</script>
