 <?php 
require_once 'conexion.php';
function getEstados(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `estados`';
  $result = $mysqli->query($query);
  $estados = '<option value="0">Elige un estado</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $estados .= "<option value='$row[id]'>$row[estado]</option>";
  }
  return $estados;
}
echo getEstados();