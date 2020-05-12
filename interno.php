<?php
session_start();
error_reporting(0);
$nombre = $_SESSION["login"];

if(!(isset($nombre))){
    echo "Usted no tiene autorización para ver esta página";
    exit();
}else{
    echo "El nombre de la sesión es <strong>$nombre</strong> <br />";
    echo "Tema elegido: $tema";
}
//    Recibo la cookie
//    $_COOKIE["tema"] = $_POST["tema"]
;
//    Almaceno la cookie en una variable sino dejo por defecto el tema claro
isset($_COOKIE['_cookietema']) ? $tema = $_COOKIE['_cookietema'] : $tema = "tema_claro";


//Guardo la cookie
//    setcookie("tema",$tema);
// o directamente, funciona con doble refresh, por que?
//    setcookie("tema",$_POST["tema"]);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceso correcto</title>

    <!--Estilos CSS-->
    <link rel="stylesheet" type="text/css" href="css/<?php echo $tema ?>.css" media="all">
</head>
<body>
<h1>Accedió correctamente a la pagina</h1>

<form action="funcion-cookie.php" method="GET">
    <label for="tema">Selecciona tu tema: </label>
    <select name="tema" id="tema">
        <option value="tema_claro">Claro</option>
        <option value="tema_oscuro">Oscuro</option>
    </select>
    <input type="submit" value="Cambiar">
</form>

<a href="index.php">Volver a la pagina anterior</a>
<br />
<a href="cerrar-sesion.php">Cerrar Sesión</a>
</body>
</html>
