<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 10/2/17
 * Time: 8:47
 */
//ventana que nos muestra nuestros albums
abstract class formMiAlbum
{


public static function misAlbumes(){

    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Mis álbumes</title>
    </head>
    <body>

    <h1>Listado de álbumes</h1>


        <?php
        AlbumBD::buscarAlbumes();
        //si no tiene albumes nos saca el mensaje y si no nos saca los albums con la repetitiva de abajo que la ejecuta por cada uno de los botones

        if($_SESSION["albumes"] == null)
        {
            echo "El usuario no tiene albumes";
        }
        else
            {
                echo '<h3>Selecciona el Álbum que quieres ver.</h3>';
                echo "<table class='table' border='1'><tr><th>Album</th><th>Fecha</th><th>Descripcion</th><th>Ver album</th></tr>";
                for ($x = 0; $x < count($_SESSION["albumes"]); $x++) {
                    echo "<form action='router.php' method='post'>";
                    ?><tr><td><?php echo $_SESSION["albumes"][$x]->getTitulo();?></td><td><?php echo $_SESSION["albumes"][$x]->getFecha();?></td><td><?php echo $_SESSION["albumes"][$x]->getDescripcion();?></td><td><input type="hidden" name="album" value="<?php echo $_SESSION["albumes"][$x]->getIdAlbum();?>"> <input type="submit" name="veralbum" value="Ver Album"></td></tr><?php
                    echo "</form>";
                }
                echo "</table>";
        }

        ?>
        </table>
        <br/>
        <form action="router.php" method="post">
            <input type="submit" name="volver" value="Volver">
        </form>


    </body>
    </html>

    <?php
        }

    }
?>


