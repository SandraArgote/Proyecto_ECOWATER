<?php
session_start();
if (isset($_REQUEST["c"])) {
    session_destroy();
    header("Location:../controlador/contolUser.php");
}

if (isset($_SESSION["s1"])) {
    
} else {
    header("Location:../controlador/contolUser.php");
}
?>
<!DOCTYPE HTML>


<html lang="esp">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../vista/img/icon.png" />

        <title>Datos Personales</title>
    </head>
    <!--ENLACES DE ESTILOS Y TIPOGRAFÍA-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vista/css/normalize.css"/>
    <link rel="stylesheet" href="../vista/css/estilos.css"/>
    <body>

        <header>
            <div class="contenedor-usuario">
                <div class="cont-two">

                    <!-- NAVEGACIÓN-->
                    <nav class="navegacion-usuario">
                        <a href="../vista/inicio.php">Inicio</a>
                        <a href="../controlador/info.php?username=<?php echo $_SESSION['s1'] ?>">Datos Personales</a>
                        <a href="../controlador/infoconsumo.php?username=<?php echo $_SESSION['s1'] ?>">Consumo</a>
                        <a href="../vista/resultados.php">Resultados</a>

                    </nav>


                    <?php echo " <a class='cerrar-sesion' href='inicio.php?c=1'>Cerrar Sesion</a>"; ?>
                </div> 

            </div>

        </header>

        <section class="formularios">
            <h1>Datos de Usuario</h1>

            <form action="../controlador/modificarDatos.php" method="POST">
                <input type="hidden"  value="<?php echo $_SESSION["s1"] ?>" name="user" required /><br>

                <input type="hidden" name="idUsuario" value="<?php echo $datos->idUsuario ?>" />

                <P>
                    Nombre:
                    <input type="text" class="border" name="nombre" value="<?php echo $datos->nombre ?>" />

                    Apellidos:
                    <input type="text" class="border" value="<?php echo $datos->apellidos ?>" name="apellidos" />
                </P>
                <P>
                    Edad:
                    <input type="number" min="1" max="100" class="border" name="edad" value="<?php echo $datos->edad ?>" />

                    Sexo:
                    <?php
                    if ($datos->sexo == "") {
                        echo("<INPUT TYPE='radio' class='border' name='sexo' VALUE='Hombre'>Hombre ");
                        echo("<INPUT TYPE='radio' class='border'  name='sexo' VALUE='Mujer'>Mujer");
                    } else {
                        if ($datos->sexo == "Hombre") {
                            echo("<INPUT TYPE='radio' class='border' name='sexo' checked VALUE='Hombre'>Hombre");
                            echo("<INPUT TYPE='radio' class='border' name='sexo' VALUE='Mujer'>Mujer");
                        } else if ($datos->sexo == "Mujer") {
                            echo("<INPUT TYPE='radio' class='border' name='sexo' VALUE='Hombre'>Hombre");
                            echo("<INPUT TYPE='radio' class='border' name='sexo' checked VALUE='Mujer'>Mujer");
                        }
                    }
                    ?>


                    Estado Civil:
                    <select name="estadoCivil" class="select" value="<?php echo $datos->estadoCivil ?>" />
                    <?php if ($datos->estadoCivil != "") echo("<option value='$datos->estadoCivil'>$datos->estadoCivil</option>") ?>
                <option value="seleccionar">Seleccionar...</option>
                <option value="Soltero">Soltero(a)</option>
                <option value="Divorcciado">Divorciado(a)</option>
                <option value="Casado">Casado(a)</option>
                <option value="Union libre">Union Libre(a)</option>
                <option value="Viudo">Viudo(a)</option>
                </select>
                </P>
                <P>
                    Correo:
                    <input type="text" class="border" name="correo" value="<?php echo $datos->correo ?>" />
                </P>
                <h1>Domicilio</h1>
                <P>
                    Calle:
                    <input type="text" class="border" name="calle" value="<?php echo $datos->calle ?>" />

                    No:
                    <input type="text" class="border" name="numero" value="<?php echo $datos->numero ?>" /><br>

                    Colonia:
                    <input type="text" class="border" name="colonia" value="<?php echo $datos->colonia ?>" />
                </P>
                <P>
                    Codigo Postal:
                    <input type="number" class="border" name="codigoPostal" value="<?php echo $datos->codigoPostal ?>" />
                </P>


                <input type="submit" value="Actualizar" class="boton-azul centrado" />

            </form>
        </section>


    </body>

</html>
