<?php
session_start();
session_destroy();
header("location: login.php?estado=4");

exit();
?>