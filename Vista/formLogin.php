
<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 24/1/17
 * Time: 13:57
 */

//Pagina inicial donde introduciremos los datos del usuario, si no esta el usuario no da la opcion de registrarnos

abstract class formLogin
{

    public static function fInicio()

    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Login del usuario</title>
        </head>
        <body>

        <h1>Iniciar sesion</h1>

        <h3>Bienvenido, introduce tus datos o realiza el registro</h3>

        <form action="Controlador/router.php" method="post">

            <p>Usuario: <input type="text" name="usuario"></p>

            <p>Contraseña: <input type="password" name="contrasena"></p>

            <input type="submit" name="entrar" value="entrar">
            <input type="submit" name="registrarse" value="registrarse">

        </form>
        </body>
        </html>

        <?php

    }

}
?>