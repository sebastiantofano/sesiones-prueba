<?php
    session_start();

    //Recupero el valor enviado en el form
    $var_sesion = $_POST["nombre"];

    if($var_sesion == "pepe" ) {
        //Asigno a la supervariable el nombre del usuario solo si es correcto
        $_SESSION["login"] = $var_sesion;
        header("location:interno.php");
        exit();
    } else {
//        echo "Usuario incorrecto";
        header("location:index.php?fallo=true");
        exit();
    }
?>
