<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 24/1/17
 * Time: 13:57
 */

//Pagina con el formulario de registro
abstract class formRegistro
{

    public static function fRegistro()
    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Registro del usuario</title>
        </head>
        <body>

        <h1>Registrar</h1>

        <h3>Introducir los datos para registrarse</h3>

        <form action="router.php" method="post">

            <p>Usuario: <input type="text" name="usuario"></p>

            <p>Contraseña: <input type="password" name="contrasena"></p>

            <p>Email: <input type="text" name="email"></p>

            <p>Fecha <input type="date" name="fechareg"></p>

            <p>Ciudad: <input type="text" name="ciudad"></p>

            <p>Pais: <select>
                    <option name="pais" value="Alemania">Alemania</option>
                </select></p>

            <p>Foto: <input type="text" name="foto"></p>

            <input type="submit" name="registrar" value="registrar">
            <input type="submit" name="cancelar" value="cancelar">

        </form>
        </body>
        </html>

        <?php
    }

}

?>