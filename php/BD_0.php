<?php 

	session_start();
	require_once 'conexion.php';

		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);
		$conexion = getConn();

		$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave='$password'");

		if (mysqli_num_rows($verificar_usuario) > 0){
			$_SESSION['user']=$usuario;
			echo 1;
		}else{
			echo 0;
		}

?>