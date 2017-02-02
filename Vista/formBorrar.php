<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 2/2/17
 * Time: 13:12
 */

require_once '../Modelo/Usuario.php';

abstract class formBorrar
{

        public static function vBaja()
        {

            ?>

            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <title>Dar de baja</title>
            </head>
            <body>
            <h1>Dar de baja</h1>

            <h3>¿Confirmas que quieres darte de baja?</h3>
            <br>
            <h4>Se cerrará la sesión y se borrará tu usuario actual.</h4>


            <form action="router.php" method="post">

                <input type="submit" name="borrar" value="Borrar">
                <input type="submit" name="cancelar2" value="Cancelar">

            </form>
            </body>
            </html>

            <?php

        }

}

?>