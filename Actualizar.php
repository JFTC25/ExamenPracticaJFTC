<?php
 $conexion = mysqli_connect("sql107.epizy.com", "epiz_29329664", "AgSUQmI108G", "epiz_29329664_bd_g2");
 mysqli_set_charset($conexion, "utf8");

$id = $_POST['id'];
$pro = $_POST['pro']; 
$des = $_POST['des'];
$pre = $_POST['pre'];
$can = $_POST['can'];
$actualizar = "UPDATE producto SET producto='$pro', descripcion='$des', precio='$pre', cantidad='$can' WHERE id='$id'";

$resul=mysqli_query($conexion, $actualizar);

if ($resul){
   header("Location: Inicio.php");
}else{
    echo "Error en registro: ".mysqli_error($conexion);
}
?>