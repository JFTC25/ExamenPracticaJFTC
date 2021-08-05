<?php 
$conex = mysqli_connect("sql107.epizy.com", "epiz_29329664", "AgSUQmI108G", "epiz_29329664_bd_g2");
mysqli_set_charset($conex, "utf8");

$inves=$_POST['inves']; 

$xp = "SELECT * FROM producto WHERE producto LIKE '%".$inves."%' ";

$dd= mysqli_query($conex,$xp);

?>