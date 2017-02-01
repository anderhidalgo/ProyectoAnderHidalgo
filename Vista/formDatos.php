<?php
/**
 * Created by PhpStorm.
 * User: ander
 * Date: 30/01/17
 * Time: 0:12
 */
//Pagina con los datos del usuario
require_once "../Controlador/PaisBD.php";

//Formulario 
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

                <h3>Estos son tus datos de usuario.</h3>

                <form action="router.php" method="post">

                    <p>Usuario: <input type="text" name="usuario" value="<?php $usu=$_SESSION["usuario"]; echo $usu->NomUsuario;?>"></p>
                    <p>Contraseña: <input type="password" name="contrasena" value="<?php  echo $_SESSION["usuario"]->Contrasena;?>"></p>
                    <p>Email: <input type="text" name="email" value="<?php  echo $_SESSION["usuario"]->Email;?>"></p>
                    <p>Fecha <input type="date" name="fecha" value=""></p>
                    <p>Ciudad: <input type="text" name="ciudad" value="<?php $usu->Ciudad ?>"></p>
                    <p>Pais: <select>
                            <?php
                            PaisBD::obtenerPaises();
                            for($x=0;$x<count($_SESSION["paises"]);$x++) {
                                ?><option name ="pais" value = "<?php echo $_SESSION["paises"][$x]->getIdPais();?>"><?php echo $_SESSION["paises"][$x]->getNomPais();?></option >

                                <?php
                            }
                            ?>
                        </select></p>

                    <p>Foto: <input type="text" name="foto" value="<?php $usu->getFoto?>"></p>

                    <input type="submit" name="actualizar" value="Guardar">
                    <input type="submit" name="cancelar" value="cancelar">

                </form>

                </body>
                </html>
            <?php

        }


}

?>
