<?php
 $conexion = mysqli_connect("sql107.epizy.com", "epiz_29329664", "AgSUQmI108G", "epiz_29329664_bd_g2");
 mysqli_set_charset($conexion, "utf8");

$id = $_GET['id'];
$eliminar ="DELETE FROM producto WHERE id = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar){
    header("Location: Inicio.php");
}else{
    echo"Error en eliminar registro ".mysqli_error($conn);
}
?> 