<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 10/2/17
 * Time: 10:00
 */
abstract class formAnadirFotoAlbum
{


public static function vanadirFoto(){

    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Anadir foto al album </title>
    </head>
    <body>
    <h1>Crea una nueva foto</h1>

    <h3>Rellena los datos de la foto.</h3>

    <form action="router.php" method="post" enctype="multipart/form-data">

        <label for="titulo">Titulo: </label><input type="text" name="titulo">

        <label for="fecha">Fecha: </label> <input type="date" name="fecha" min="1900-01-01" max="<?php echo date("Y-m-d");?>"></p>
        <label for="pais">Pais: </label><select name="pais">
            <?php
            PaisBD::obtenerPaises();
            for ($x = 0; $x < count($_SESSION["paises"]); $x++) {
                ?><option value= "<?php echo $_SESSION["paises"][$x]->getIdPais();?>"><?php echo $_SESSION["paises"][$x]->getNomPais();?></option ><?php
            }
            ?>

        </select>
        <label for="album">Album: </label><select name="album">
        <?php

        AlbumBD::buscarAlbumes();
        for ($x = 0; $x < count($_SESSION["albumes"]); $x++) {
            ?><option value= "<?php echo $_SESSION["albumes"][$x]->getTitulo();?>"><?php echo $_SESSION["albumes"][$x]->getTitulo();?></option ><?php
        }

        ?>
        </select>

        <p><label for="fichero">Fichero:</label><input type="file" name="fichero" accept="image/*"></p>
        <label for=""></label>

        <input type="submit" name="anadirfoto" value="Anadir Foto">
        <input type="submit" name="volver" value="Cancelar">


    </form>
    </body>
    </html>


    <?php

}

}


?>



