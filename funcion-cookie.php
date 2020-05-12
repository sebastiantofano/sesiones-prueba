<?php
    session_start();

    if(!(isset($_SESSION["login"]))){
        echo "Usted no tiene autorización";
        exit();
    }
$tema=$_GET['tema'];
setcookie('_cookietema',$tema,time()+(86400*30),"/","");
header("Location:interno.php");
exit();
?>