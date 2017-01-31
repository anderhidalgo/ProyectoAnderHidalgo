<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 27/1/17
 * Time: 12:20
 */

require_once ('../Modelo/Usuario.php');
session_start();

//Pagina principal de despues loguearnos correctamente
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagina principal usuario</title>

</head>
<body>

<h1>Esto es la pagina principal</h1>
<h2>Bienvenido <?php  echo $_SESSION["usuario"]->NomUsuario;?></h2>

<form action="../Controlador/router.php" method="post">

    <input type="submit" name="misdatos" value="Mis datos">
    <input type="submit" name="baja" value="Darme de baja">
    <input type="submit" name="albumes" value="Mis álbumes">
    <input type="submit" name="nuevoalbum" value="Crear álbum">
    <input type="submit" name="fotonueva" value="Añadir foto al álbum">

</form>
</body>

</html>