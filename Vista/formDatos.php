<?php
/**
 * Created by PhpStorm.
 * User: ander
 * Date: 30/01/17
 * Time: 0:12
 */
//Pagina con los datos del usuario

abstract class formDatos{

    public static function Datos(){

        ?>

                <!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <title>Registro</title>
                </head>
                <body>
                <h1>Datos Personales</h1>

                <h3>Estos son tus datos de usario.</h3>



                <form>

                    <?php

                    ?>

                    <input type="submit" name="actualizar" value="Guardar">
                    <input type="submit" name="cancelar" value="cancelar">

                </form>

                </body>
                </html>
            <?php

        }


}

?>
