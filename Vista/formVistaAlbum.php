<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 10/2/17
 * Time: 13:32
 */
abstract class formVistaAlbum
{


    public static function vistaAlbum(){

        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Mis álbumes vista</title>
        </head>


        <body>
        <h1>Vista de este álbum</h1>

        <?php $album = unserialize($_SESSION["album"]);?>

        <p>Titulo: <?php echo $album->getTitulo();?></p>
        <p>Descripcion: <?php echo $album->getDescripcion();?></p>
        <p>Fecha: <?php echo $album->getFecha();?></p>
        <p>Pais: <?php echo $album->getPais();?></p>

        <?php FotoBD::sFotos();

        for ($x = 0; $x < count($_SESSION["fotos"]); $x++)
        {
            ?><img src="<?php echo $_SESSION["fotos"][$x]->getFichero();?>"><?php
        }

        ?>
        <form action="router.php" method="post" enctype="multipart/form-data">
            <input type="submit" name="volver" value="Salir">
        </form>

        </body>
        </html>
        <?php
    }

}