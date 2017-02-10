<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 10/2/17
 * Time: 8:47
 */
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

    <form action="router.php" method="post">
        <?php
        AlbumBD::buscarAlbumes();

        if($_SESSION["albumes"] == null)
        {
            echo "El usuario no tiene albumes";
        }
        else
            {
            echo '<h3>Selecciona el Álbum que quiere ver.</h3>';
            echo "<table border='1'><tr><th>Album</th><th>Fecha</th><th>Descripcion</th><th>Ver álbum</th></tr>";
            for ($x = 0; $x < count($_SESSION["albumes"]); $x++) {
                ?><tr><td><?php echo $_SESSION["albumes"][$x]->getTitulo();?></td><td><?php echo $_SESSION["albumes"][$x]->getFecha();?></td><td><?php echo $_SESSION["albumes"][$x]->getDescripcion();?></td><td> <a href="#">Enlace vacio</a></td></tr><?php
            }
            echo "</table>";
        }

        ?>
        </table>
        <br/>
        <input type="submit" name="volver" value="Volver">

    </form>
    </body>
    </html>

    <?php
        }

    }
?>


