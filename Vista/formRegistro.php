<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 24/1/17
 * Time: 13:57
 */

//Pagina con el formulario de registro de un nuevo usuario
require_once "../Controlador/PaisBD.php";

abstract class formRegistro
{

    /**
     *
     */
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

            <p>Pais: <select name="pais">
                    <?php
                    PaisBD::obtenerPaises();
                    //Repetitiva que nos saca los paises de la base de datos , la consulta esta en /Controlador/PaisBD
                    for($x=0;$x<count($_SESSION["paises"]);$x++) {
                        ?><option name ="pais" value = "<?php echo $_SESSION["paises"][$x]->getIdPais();?>"><?php echo $_SESSION["paises"][$x]->getNomPais();?></option >

                        <?php
                    }
                        ?>

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