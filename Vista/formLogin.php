
<?php
/**
 * Created by PhpStorm.
 * User: 2gdwes03
 * Date: 24/1/17
 * Time: 13:57
 */

//Pagina inicial donde introduciremos los datos del usuario, si no esta el usuario no da la opcion de registrarnos

//require_once "../Modelo/FotoBD.php";

abstract class formLogin
{

    public static function fInicio($error='')

    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Login del usuario</title>
        </head>


        <h1>Iniciar sesion</h1>

        <h3>Bienvenido, introduce tus datos o realiza el registro</h3>

        <form action="/ProyectoAnderHidalgo/Controlador/router.php" method="post">

            <p>Usuario: <input type="text" name="usuario"></p>

            <p>Contraseña: <input type="password" name="contrasena"></p>

            <input type="submit" name="entrar" value="entrar">
            <input type="submit" name="registrarse" value="registrarse">



            <div class="busqueda">
                <p>Busqueda de fotos:</p>
                <p><input type="text" name="nomfoto" value="Fotos a buscar"></p> <input type="submit" name="buscarfoto" value="Buscar">

            </div>
        </form>

        <div class="fotos">

            <h4>Ultimas fotos subidas</h4>
            <?php

            FotoBD::ultimasFotos();

            for($x = 0; $x < count($_SESSION["ultimas"]); $x++)
            {
                ?><img height="300px" src="<?php echo substr($_SESSION["ultimas"][$x]->getFichero(), 3);?>"><?php
            }

            ?>

        </div>


        <br>
        <p> <?php echo $error; ?></p>
        </body>
        </html>

        <?php

    }

}

?>