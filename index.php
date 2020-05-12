<?php
session_start();
if (isset($_SESSION["login"])) {
    $nombre = $_SESSION["login"];
    echo "Usted sigue logueado con la sesión de <strong>$nombre</strong>";
}

//    Almaceno la coockie en una variable sino dejo por dejecto el tema claro
isset($_COOKIE['_cookietema']) ? $tema = $_COOKIE['_cookietema'] : $tema = "tema_claro";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <!--Estilos CSS-->
    <link rel="stylesheet" type="text/css" href="css/<?php echo $tema ?>.css" media="all">
</head>
<body>
<h1>Página de inicio</h1>


<?php
if(!(isset($_SESSION["login"]))){
?>
<form action="validar-login.php" method="post">
	<h2>Iniciar sesión</h2>
    Nombre<input type="text" name="nombre"> <br/>
    <p>Debe logearse con el usuario "pepe" para iniciar sesión correctamente</p>
    <?php
    if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
    {
        echo "<div style='color:red'>Usuario incorrecto </div>";
    }
    ?>
    <input type="submit" value="Iniciar sesión">
</form>
<?php
}else{ echo '<a href="interno.php"> Volver a la pagina de acceso correcto </a>';}
?>

</body>
</html>