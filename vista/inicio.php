<?php

session_start();
if (isset($_REQUEST["c"])) {
    session_destroy();
    header("Location:../controlador/contolUser.php");
}
     
    if (isset($_SESSION["s1"])) {
   
   } else{
        header("Location:../controlador/contolUser.php");
   }
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../vista/img/icon.png" />
        <title>Iniciar sesión</title>
    </head>

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
                    
                  <?php echo " <a class='cerrar-sesion' href='inicio.php?c=1'>Cerrar Sesion</a>";
                  ?>
                    
                </div> 

            </div>

        </header>

        <section>

            <div class="centrado">
                <h2 class="centrar-texto bienvenido"> ¡Bienvenido <span> <?php echo $_SESSION['s1'] ?> </span>! </h2>


            </div>

            <div class="seccion-objetivo">
                <div class="img-gota">
                    <img src="../vista/img/icon.png" width="100px"  height="100px"alt="">
                </div>
                <div>
                    <p>Este sitio tiene la finalidad de hacer conciencia sobre el consumo del agua y enseñar hacer un buen uso del agua</p>

                </div>
                
            </div>

            <div>
                <h2 class="centrar-texto">Recomendaciones</h2>

                <img class="img-recomendaciones centrado seccion" src="../vista/img/Consejos baño.jpg" alt="">
                <img class="img-recomendaciones centrado seccion" src="../vista/img/Consejos cocina.jpg" alt="">
                <img class="img-recomendaciones centrado seccion" src="../vista/img/Consejos casa.jpg" alt="">


            </div>
        </section>


    </body>
</html>
