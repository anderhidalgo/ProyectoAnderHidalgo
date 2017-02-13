<?php
/**
 * Created by PhpStorm.
 * User: ander
 * Date: 30/01/17
 * Time: 0:12
 */
//Pagina con los datos del usuario
require_once "../Modelo/PaisBD.php";

//Formulario 
abstract class formDatos{

    public static function Datos(){

        $usu=unserialize($_SESSION["usuario"]);

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

                    <p>Usuario: <input type="text" name="usuario" value="<?php echo $usu->getNomUsuario();?>" disabled></p>
                    <p>Contraseña: <input type="text" name="contrasena" value="<?php  echo $usu->getContrasena();?>"></p>
                    <p>Email: <input type="text" name="email" value="<?php  echo $usu->getEmail();?>"></p>
                    <p>Fecha <input type="date" name="fecha" value="<?php  echo $usu->getFNacimiento();?>"></p>
                    <p>Ciudad: <input type="text" name="ciudad" value="<?php echo $usu->getCiudad();?>"></p>
                    <p>Pais: <select name="pais">
                            <?php
                            PaisBD::obtenerPaises();
                            //repetitiva que nos saca los paises de la base de datos

                            for ($x = 0; $x < count($_SESSION["paises"]); $x++)
                            {
                                if($_SESSION["paises"][$x]->getIdPais() == $usu->getPais())
                                {
                                    ?><option value= "<?php echo $_SESSION["paises"][$x]->getIdPais();?>" selected="selected"><?php echo $_SESSION["paises"][$x]->getNomPais();?></option ><?php
                                }
                                else
                                {
                                    ?><option value= "<?php echo $_SESSION["paises"][$x]->getIdPais();?>"><?php echo $_SESSION["paises"][$x]->getNomPais();?></option ><?php
                                }

                            }
                            ?>
                        </select></p>

                    <p>Foto: <input type="text" name="foto" value="<?php echo $usu->getFoto();?>"></p>

                    <input type="submit" name="modificar" value="Modificar">
                    <input type="submit" name="volver" value="cancelar">

                </form>

                </body>
                </html>
            <?php

        }








}

?>
