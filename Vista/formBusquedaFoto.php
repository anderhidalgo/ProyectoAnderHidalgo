<?php

/**
 * Created by PhpStorm.
 * User: ander
 * Date: 12/02/17
 * Time: 16:41
 */
//Ventana que nos muestra la foto
abstract class formBusquedaFoto
{

    public static function vBFoto(){


        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Dar de baja</title>
        </head>


        <body>
        <h1>Listado de fotos buscadas</h1>


        <?php
        FotoBD::bFotos();

        if($_SESSION["busqueda"] == null){
            echo "No se han encotrado fotos";
        }

        else
            {
            echo "<table class='table' border='1'><tr><th>Titulo</th><th>Fecha</th><th>Foto</th></tr>";
            for ($x = 0; $x < count($_SESSION["busqueda"]); $x++) {
                ?><tr><td><?php echo $_SESSION["busqueda"][$x]->getTitulo();?></td><td><?php echo $_SESSION["busqueda"][$x]->getFecha();?></td><td><img height="300px" src="<?php echo $_SESSION["busqueda"][$x]->getFichero();?>"></td></tr><?php
            }
            echo "</table></form>";
        }

        ?>
        </table>
        <br/>
        <form action="router.php" method="post">
            <input type="submit" name="volver" value="Salir">
        </form>

        </body>
        </html>
        <?php
    }

}