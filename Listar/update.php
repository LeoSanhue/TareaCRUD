<?php
include("../conexion.php");
$id = $_GET['id'];
?>
<form method="post">
    <p> NUEVA URL = <input type ="text" name= "NewUrl" /> <input type="submit" value = "modificar" /></p>
</form>
<?php

if($_POST){
    $url= $_POST["NewUrl"];
    $consulta = " UPDATE imagenes SET url = '$url'  WHERE id = $id";
    $resultado = mysqli_query($con, $consulta);
    if (!$resultado) {
        echo "no se borro";
    } else {
        header("Location: read.php");
    }
    } else {
        echo "inserte URL";
    }
?>