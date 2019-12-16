<?php 
function getConn(){
  $conexion = mysqli_connect("localhost", "root", "", "banco");
  if (mysqli_connect_errno($conexion))
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  $conexion->set_charset('utf8');
  return $conexion;
}



//$conexion = mysqli_connect("localhost","root","codigo1","banco");