<?php
if($_GET){
$id = $_GET['id'];
echo $id;
include("../conexion.php");
$consulta = "DELETE FROM imagenes WHERE id=$id";
$resultado = mysqli_query($con, $consulta);
if (!$resultado) {
    echo "no se borro";
} else {
    header("Location: read.php");
}
} else {
    echo "aa";
}

?>