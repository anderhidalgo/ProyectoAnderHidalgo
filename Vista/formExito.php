<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 25/1/17
 * Time: 12:59
 */

//Pagina en la que una vez registrado nos muestra que esta bien y nuestro usuario creado
abstract class formExito
{

    public static function fExito()
    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Registro exitoso</title>
        </head>
        <body>
        <h1>Registro correcto</h1>

        <h3>Te has registrado en nuestra pagina correctamente.</h3>


        <a href="../index.php">Haz click para volver a la pagina principal.</a>

        </body>
        </html>

        <?php
    }

}
?>