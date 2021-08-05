<?php

$dbhost = "sql107.epizy.com";
$dbuser = "epiz_29329664";
$dbpass = "AgSUQmI108G";
$dbname = "epiz_29329664_bd_g2";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$usuario = $_POST['usuario']; 
$correo = $_POST['correo'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
    if($pass1 == $pass2){
        $pass1 = base64_encode($pass1);
        $sql = "INSERT INTO usuario(usuario, correo, pass) VALUE ('".$usuario."','".$correo."','".$pass1."')";

        if(mysqli_query($conn,$sql)){
            header("Location:login.php?estado=1");
        }else{
            echo "ERROR AL REGISTRARSE";
        } 
    }else {
       header("Location:Registro.php?estado=1");
    }
}
?>