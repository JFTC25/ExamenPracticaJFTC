<?php
$dbhost = "sql107.epizy.com";
$dbuser = "epiz_29329664";
$dbpass = "AgSUQmI108G";
$dbname = "epiz_29329664_bd_g2";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$pro = $_POST['pro']; 
$des = $_POST['des'];
$pre = $_POST['pre'];
$can = $_POST['can'];
    $sql = "INSERT INTO producto(producto, descripcion, precio, cantidad) VALUES ('".$pro."','".$des."','".$pre."','".$can."')";
       if(mysqli_query($conn,$sql)){
           header("Location: inicio.php");
    }else{
            echo "Error en registro: ".mysqli_error($conn);
    }
}
?>

