<?php

$dbhost = "sql107.epizy.com";
$dbuser = "epiz_29329664";
$dbpass = "AgSUQmI108G";
$dbname = "epiz_29329664_bd_g2";

session_start(); 
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$user = $_POST['usuario'];
$pass = $_POST['pass'];
        $pass = base64_encode($pass);
        $sql = "SELECT COUNT(*) as contar FROM usuario WHERE usuario ='$user' AND pass ='$pass'";
        $consulta=mysqli_query($conn,$sql);
        $array=mysqli_fetch_array($consulta);
        if($array['contar'] > 0){
            $_SESSION['usuario']=$user;
            header("Location:inicio.php");
        }else{
       header("Location:login.php?estado=2");
    }
}
?>