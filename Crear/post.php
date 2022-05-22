<?php
include("../conexion.php");
$i=0;
foreach($con->query('SELECT * FROM imagenes') as $row){
    $i=$i+1;
}
$i=$i+1;
if($_POST){
    $url= $_POST["imagen"];
    $consulta = " INSERT INTO imagenes (url) VALUES ('$url')";
    $resultado = mysqli_query($con, $consulta);
    if (!$resultado) {
        echo "no se inserto";
    } else {
        header("Location: ../index.php");
    }
} else {
    echo "error";
}
?>