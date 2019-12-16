 <?php 
require_once 'conexion.php';
function getParroquias(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `parroquias` WHERE municipio_id = $id";
  $result = $mysqli->query($query);
  $parroquias = '<option value="0">Elige una parroquia</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $parroquias .= "<option value='$row[id]'>$row[parroquia]</option>";
  }
  return $parroquias;
}
echo getParroquias();