<?php
session_start();
    require_once "../modelo/database.php";
    
    function conexion(){
        return mysqli_connect('localhost','root','','proyectodae');
    }
  //  $con = new Database();
    
    $conexion = conexion();
    $username= $_SESSION['s1'];
    
    $sqldatos="select * from usuario where usuario.username = '$username'";
    //echo $username;
    $result = mysqli_query($conexion, $sqldatos);
    $res = mysqli_fetch_object($result);
    
    $idUsuario= $res->idUsuario;
    //echo $idUsuario;
    $sql = "SELECT numeroPreg, valorResp FROM respuestas WHERE idUsuario = $idUsuario ORDER BY numeroPreg";
    $resultado = mysqli_query($conexion, $sql);
    $valoresY=array(); //Montos
    $valoresX=array(); //Fechas

    while($ver=mysqli_fetch_row($resultado)){
        $valoresY[]=$ver[1];
        $valoresX[]=$ver[0];
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);
   
?>


<div id="graficaBarras1"></div>

<script type="text/javascript">
function crearCadenaBarras(json) {
    var parsed = JSON.parse(json);
    var arr = [];
    for (var x in parsed) {
        arr.push(parsed[x]);
    }
    return arr;
}
</script>

<script text="text/javascript">
datosX = crearCadenaBarras('<?php echo $datosX?>');
datosY = crearCadenaBarras('<?php echo $datosY?>');

var data = [{
    x: datosX,
    y: datosY,
    type: 'bar',

    marker: {
        color: 'rgb(37,137,202)'
    }
}];

var layout = {
    title: 'Grafica de tu ahorro de agua',
    font: {
        family: 'Raleway, sans-serif'
    },
    xaxis: {
        tickangle: 0,
        title: 'Numero de la pregunta'
    },
    yaxis: {
        title: 'Valor de la respuesta'
    },
    bargap: 0.05
};

Plotly.newPlot('graficaBarras1', data, layout);
</script>