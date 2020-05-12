<?php
    session_start();

    if(!isset($_SESSION['login'])){
        echo "Usted no tiene acceso a esta página";
        exit();
    }
    session_destroy();
    header("location:index.php");
    exit();
?>