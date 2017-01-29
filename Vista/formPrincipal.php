<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 27/1/17
 * Time: 12:20
 */

include ('../Modelo/Usuario.php');

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
<h2>Bienvenido<?php       ?></h2>

<form action="router.php">
    <input type="submit" name="datos" value="Mis datos">
    <input type="submit" name="baja" value="Darme de baja">
    <input type="submit" name="albumes" value="Mis álbumes">
    <input type="submit" name="nuevoalbum" value="Crear álbum">
    <input type="submit" name="fotonueva" value="Añadir foto al álbum">
</form>
</body>

</html>