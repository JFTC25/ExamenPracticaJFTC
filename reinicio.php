<?php
$dbhost = "sql107.epizy.com";
$dbuser = "epiz_29329664";
$dbpass = "AgSUQmI108G";
$dbname = "epiz_29329664_bd_g2";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$user = $_POST['usuario'];
$cor = $_POST['correo']; 
    $sql2="SELECT * FROM usuario WHERE usuario='$user' AND correo='$cor'";
    $consulta2=mysqli_query($conn,$sql2);
    $array2=mysqli_fetch_array($consulta2);
    if(!isset($array2['id'])){
        header("location:passrecu.php?estado=2");

    }else{
        $id=$array2['id'];
        $nueva=randoma();
        $new= base64_encode($nueva);
        $sql="UPDATE usuario SET pass='$new' WHERE id='$id'";
        if (mysqli_query($conn,$sql)) {
            echo "Tu nueva contraseña es: ".$nueva;
            header("Refresh: 5; URL=login.php?estado=5");
        }else{
            echo "Error".mysqli_error($conn);
        }
    }
}

function randoma(){
    $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdfghijklmnopqrstuvwxyz0123456789';
    $longpalabra=10;
    for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
        $x = rand(0,$n);
        $pass.= $caracteres[$x];
    }
    return ($pass);
}
?>