 <?php 
require_once 'conexion.php';
function getMunicipios(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `municipios` WHERE estado_id = $id";
  $result = $mysqli->query($query);
  $municipios = '<option value="0">Elige un municipio</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $municipios .= "<option value='$row[id]'>$row[municipio]</option>";
  }
  return $municipios;
}
echo getMunicipios();