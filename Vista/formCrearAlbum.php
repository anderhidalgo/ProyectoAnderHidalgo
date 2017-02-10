<?php

/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 8/2/17
 * Time: 14:02
 */
require_once "../Modelo/PaisBD.php";

abstract class formCrearAlbum
{

    public static function vAlbum()
    {

    ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Crear Album</title>
        </head>
        <body>
        <h1>Crea un nuevo Album</h1>

        <h3>Rellena los datos del Album.</h3>

        <form action="router.php" method="post">

            <label for="titulo">Titulo: </label><input type="text" name="titulo">
            <label for="descripcion">Descripcion: </label> <input type="text" name="descripcion">
            <label for="fecha">Fecha: </label> <input type="date" name="fecha" min="1900-01-01" max="<?php echo date("Y-m-d");?>"></p>
            <label for="pais">Pais: </label><select name="pais">
                <?php
                    PaisBD::obtenerPaises();
                    for ($x = 0; $x < count($_SESSION["paises"]); $x++) {
                        ?><option value= "<?php echo $_SESSION["paises"][$x]->getIdPais();?>"><?php echo $_SESSION["paises"][$x]->getNomPais();?></option ><?php
                }
                ?>
            </select>

            <input type="submit" name="crearalbum" value="Crear">
            <input type="submit" name="volver" value="Cancelar">
        </form>
        </body>
        </html>


    <?php

    }

}


?>