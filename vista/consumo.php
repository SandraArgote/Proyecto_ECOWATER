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
    <title>Consumo</title>
</head>
  <!--ENLACES DE ESTILOS Y TIPOGRAFÍA-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vista/css/normalize.css"/>
    <link rel="stylesheet" href="../vista/css/estilos.css"/>

<body>
    <header >

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
    <section class="formularios seccion">
        <h2 class="color-azul-hex">Conteste correctamente los siguientes datos:</h2>
        <form action="../controlador/respuestas.php" method="post" id="quiz">
            <input type="hidden"  value="<?php echo $_SESSION["s1"] ?>" name="user" required /><br>

            <input type="hidden" name="idUsuario" value="<?php echo $datos->idUsuario ?>" />

        <fieldset>
            <legend>1.¿Cúanto tiempo tardas en bañarte?</legend>
            <div>
                <input type="radio" name="pregunta1" id="preg1-respA" value="A" />
                <label for="preg1-respA">5 minutos </label><br>
                <input type="radio" name="pregunta1" id="preg1-respB" value="B" />
                <label for="preg1-respB">10 minutos </label><br>
                <input type="radio" name="pregunta1" id="preg1-respC" value="C" />
                <label for="preg1-respc">20 minutos</label><br>
                <input type="radio" name="pregunta1" id="preg1-respD" value="D" />
                <label for="preg1-respD">No estoy pendiente del tiempo </label>
            </div>
        </fieldset><br>
        <fieldset>
            <legend>2.¿Cuántas veces lavas los platos en el día?</legend>
            <div>
                <input type="radio" name="pregunta2" id="preg1-respA" value="A" />
                <label for="preg2-respA">Una vez al día en el lavaplatos</label><br>
                <input type="radio" name="pregunta2" id="preg1-respB" value="B" />
                <label for="preg2-respB">Dos veces al día en el lavaplatos</label><br>
                <input type="radio" name="pregunta2" id="preg1-respC" value="C" />
                <label for="preg2-respC">Tres veces o más al día en el lavaplatos</label><br>
                <input type="radio" name="pregunta2" id="preg1-respD" value="D" />
                <label for="preg2-respD">Una vez al día en el fregadero</label><br>
                <input type="radio" name="pregunta2" id="preg1-respE" value="E" />
                <label for="preg2-respE">Dos vez al día en el fregadero</label><br>
                <input type="radio" name="pregunta2" id="preg1-respF" value="F" />
                <label for="preg2-respF">Tres veces o más al día en el fregadero</label>

            </div>
        </fieldset><br>
        <fieldset>
            <legend>3.¿Cuántas veces por semana lavas la ropa?</legend>
            <div>
                <input type="radio" name="pregunta3" id="preg3-respA" value="A" />
                <label for="preg3-respA">Una vez a la semana</label><br>
                <input type="radio" name="pregunta3" id="preg3-respB" value="B" />
                <label for="preg3-respB">Dos veces por semana</label><br>
                <input type="radio" name="pregunta3" id="preg3-respC" value="C" />
                <label for="preg3-respC">Tres veces por semana</label><br>
                <input type="radio" name="pregunta3" id="preg3-respD" value="D" />
                <label for="preg3-respD">Cuatro veces o más por semana</label>
            </div>
        </fieldset><br>
        <fieldset>
            <legend>4.Cuando cepillas tus dientes, te afeitas, lavas los platos o lavas fruta y/o verdura, que haces:
            </legend>
            <div>
                <input type="radio" name="pregunta4" id="preg4-respA" value="A" />
                <label for="preg4-respA">Abres el grifo solo cuando necesitas agua</label><br>
                <input type="radio" name="pregunta4" id="preg4-respB" value="B" />
                <label for="preg4-respB">Dejas el agua corriendo</label>
            </div>
        </fieldset><br>
        <fieldset>
            <legend>5.Si se rompe una tubería de tu hogar, ¿Cuánto tiempo tardas en repararla?</legend>
            <div>
                <input type="radio" name="pregunta5" id="preg5-respA" value="A" />
                <label for="preg5-respA">En forma inmediata</label><br>
                <input type="radio" name="pregunta5" id="preg5-respB" value="B" />
                <label for="preg5-respB">Dentro de una semana</label><br>
                <input type="radio" name="pregunta5" id="preg5-respC" value="C" />
                <label for="preg5-respc">Cuando tenga tiempo</label>
            </div>
        </fieldset><br>
        <fieldset>
            <legend>6.En caso de tener césped y/o jardín, ¿Cuánto tiempo tarda regándolo?</legend>
            <div>
                <input type="radio" name="pregunta6" id="preg6-respA" value="A" />
                <label for="preg6-respA">Menos de 10 minutos por día</label><br>
                <input type="radio" name="pregunta6" id="preg6-respB" value="B" />
                <label for="preg6-respB">De 10 a 30 minutos por día</label><br>
                <input type="radio" name="pregunta6" id="preg6-respC" value="C" />
                <label for="preg6-respc">De 30 a 60 minutos por día</label><br>
                <input type="radio" name="pregunta6" id="preg6-respD" value="D" />
                <label for="preg6-respD">Mas de una hora</label><br>
                <input type="radio" name="pregunta6" id="preg6-respE" value="E" />
                <label for="preg6-respE">Nunca</label>
            </div>
        </fieldset><br>
        <fieldset>
            <legend>7.En caso de tener plantas, ¿Aprovechas el agua de lluvia para regarlas?</legend>
            <div>
                <input type="radio" name="pregunta7" id="preg7-respA" value="A" />
                <label for="preg7-respA">Siempre</label><br>
                <input type="radio" name="pregunta7" id="preg7-respB" value="B" />
                <label for="preg7-respB">A veces</label><br>
                <input type="radio" name="pregunta7" id="preg7-respC" value="C" />
                <label for="preg7-respc">Nunca</label>
            </div>
        </fieldset><br>
        <fieldset>
            <legend>8.¿Por qué cantidad de dinero le llega a usted el recibo del agua?</legend>
            <div>
                <input type="radio" name="pregunta8" id="preg8-respA" value="A" />
                <label for="preg8-respA">De 100 a 500 pesos</label><br>
                    <input type="radio" name="pregunta8" id="preg8-respB" value="B" />
                    <label for="preg8-respB">De 500 a 1,000 pesos</label><br>
                    <input type="radio" name="pregunta8" id="preg8-respC" value="C" />
                    <label for="preg8-respc">Mas de 1,000 pesos</label>
            </div>
        </fieldset><br>
        <br>
        <button type="submit" class="boton-azul centrado" >Finalizar</button>
    </form>
    </section>
    
    
</body>

</html>