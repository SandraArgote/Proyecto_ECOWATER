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
<html>

<head>
    <title>Graficos</title>
    
    <link rel="stylesheet" type="text/css" href="../controlador/librerias/bootstrap/css/bootstrap.css">
    <script src="../controlador/librerias/jquery-3.5.1.min.js"></script>
    <script src="../controlador/librerias/plotly-latest.min.js"></script>
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
    
    <section>
       
        
    </section>
    
    
    <div class="container seccion">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        Graficas
                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="cargaBarras1"></div>
                            </div>
                            <div class="col-sm-6">
                                <div id="cargaBarras2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
    $('#cargaBarras1').load('../controlador/graficaBarras1.php');
    $('#cargaBarras2').load('../controlador/graficaBarras2.php');
});
</script>