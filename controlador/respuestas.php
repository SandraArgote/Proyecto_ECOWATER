<?php

require_once '../modelo/database.php';

$idUsuario= $_POST['idUsuario'];
$username=$_POST['user'];
$pregunta1 = $_POST['pregunta1'];
$pregunta2 = $_POST['pregunta2'];
$pregunta3 = $_POST['pregunta3'];
$pregunta4 = $_POST['pregunta4'];
$pregunta5 = $_POST['pregunta5'];
$pregunta6 = $_POST['pregunta6'];
$pregunta7 = $_POST['pregunta7'];
$pregunta8 = $_POST['pregunta8'];

$valorPregunta1 = 0;
$valorPregunta2 = 0;
$valorPregunta3 = 0;
$valorPregunta4 = 0;
$valorPregunta5 = 0;
$valorPregunta6 = 0;
$valorPregunta7 = 0;
$valorPregunta8 = 0;
$pregunta = 0;
$totalPuntos = 0;

if ($pregunta1 == 'A') { $valorPregunta1 = 1; $pregunta = 1; }
if ($pregunta1 == 'B') { $valorPregunta1 = 2; $pregunta = 1;}
if ($pregunta1 == 'C') { $valorPregunta1 = 3; $pregunta = 1;}
if ($pregunta1 == 'D') { $valorPregunta1 = 5; $pregunta = 1;}

$preguntas = new Database();
if (isset($_POST) && !empty($_POST)) {
    //echo "$valorPregunta1";
    //echo "$pregunta";
    //echo "$pregunta1";
    $resutadodelete = $preguntas->delete($idUsuario);
    $res = $preguntas->insertar($pregunta, $valorPregunta1,$idUsuario);
}

if ($pregunta2 == 'A') { $valorPregunta2 = 1; $pregunta = 2;}
if ($pregunta2 == 'B') { $valorPregunta2 = 2; $pregunta = 2;}
if ($pregunta2 == 'C') { $valorPregunta2 = 5; $pregunta = 2;}
if ($pregunta2 == 'D') { $valorPregunta2 = 1.5; $pregunta = 2;}
if ($pregunta2 == 'E') { $valorPregunta2 = 2.5; $pregunta = 2;}
if ($pregunta2 == 'F') { $valorPregunta2 = 3.5; $pregunta = 2;}

$preguntas = new Database();
if (isset($_POST) && !empty($_POST)) {
    //echo "$valorPregunta2";
    //echo "$pregunta";
    //echo "$pregunta2";
    //$resutadodelete = $preguntas->delete($idUsuario);
    $res = $preguntas->insertar($pregunta, $valorPregunta2,$idUsuario);
}

if ($pregunta3 == 'A') { $valorPregunta3 = 1; $pregunta = 3;}
if ($pregunta3 == 'B') { $valorPregunta3 = 2; $pregunta = 3;}
if ($pregunta3 == 'C') { $valorPregunta3 = 3; $pregunta = 3;}
if ($pregunta3 == 'D') { $valorPregunta3 = 5; $pregunta = 3;}

$preguntas = new Database();
if (isset($_POST) && !empty($_POST)) {
    //echo "$valorPregunta3";
    //echo "$pregunta";
    //echo "$pregunta3";
   // $resutadodelete = $preguntas->delete($idUsuario);
    $res = $preguntas->insertar($pregunta, $valorPregunta3,$idUsuario);
}

if ($pregunta4 == 'A') { $valorPregunta4 = 1; $pregunta = 4;}
if ($pregunta4 == 'B') { $valorPregunta4 = 5; $pregunta = 4;}

$preguntas = new Database();

if (isset($_POST) && !empty($_POST)) {
    //echo "$valorPregunta4";
    //echo "$pregunta";
    //echo "$pregunta4";
    
   // $resutadodelete = $preguntas->delete($idUsuario);
    $res = $preguntas->insertar($pregunta, $valorPregunta4,$idUsuario);
}

if ($pregunta5 == 'A') { $valorPregunta5 = 1; $pregunta = 5;}
if ($pregunta5 == 'B') { $valorPregunta5 = 3; $pregunta = 5;}
if ($pregunta5 == 'C') { $valorPregunta5 = 5; $pregunta = 5;}

$preguntas = new Database();
if (isset($_POST) && !empty($_POST)) {
    //echo "$valorPregunta5";
    //echo "$pregunta";
    //echo "$pregunta5";
   // $resutadodelete = $preguntas->delete($idUsuario);
    $res = $preguntas->insertar($pregunta, $valorPregunta5,$idUsuario);
}

if ($pregunta6 == 'A') { $valorPregunta6 = 1; $pregunta = 6;}
if ($pregunta6 == 'B') { $valorPregunta6 = 2; $pregunta = 6;}
if ($pregunta6 == 'C') { $valorPregunta6 = 3; $pregunta = 6;}
if ($pregunta6 == 'D') { $valorPregunta6 = 5; $pregunta = 6;}
if ($pregunta6 == 'E') { $valorPregunta6 = 0; $pregunta = 6;}

$preguntas = new Database();
if (isset($_POST) && !empty($_POST)) {
    //echo "$valorPregunta6";
    //echo "$pregunta";
    //echo "$pregunta6";
   // $resutadodelete = $preguntas->delete($idUsuario);
    $res = $preguntas->insertar($pregunta, $valorPregunta6,$idUsuario);
}

if ($pregunta7 == 'A') { $valorPregunta7 = 1; $pregunta = 7;}
if ($pregunta7 == 'B') { $valorPregunta7 = 5; $pregunta = 7;}
if ($pregunta7 == 'C') { $valorPregunta7 = 0; $pregunta = 7;}

$preguntas = new Database();
if (isset($_POST) && !empty($_POST)) {
    //echo "$valorPregunta7";
    //echo "$pregunta";
    //echo "$pregunta7";
   // $resutadodelete = $preguntas->delete($idUsuario);
    $res = $preguntas->insertar($pregunta, $valorPregunta7,$idUsuario);
}

if ($pregunta8 == 'A') { $valorPregunta8 = 1; $pregunta = 8;}
if ($pregunta8 == 'B') { $valorPregunta8 = 3; $pregunta = 8;}
if ($pregunta8 == 'C') { $valorPregunta8 = 5; $pregunta = 8;}

$preguntas = new Database();
if (isset($_POST) && !empty($_POST)) {
    //echo "$valorPregunta8";
    //echo "$pregunta";
    //echo "$pregunta8";
   // $resutadodelete = $preguntas->delete($idUsuario);
    $res = $preguntas->insertar($pregunta, $valorPregunta8,$idUsuario);
}

$totalPuntos = $valorPregunta1 + $valorPregunta2 + $valorPregunta3 + $valorPregunta4 + $valorPregunta5 + $valorPregunta6 + $valorPregunta7 + $valorPregunta8;

if ($totalPuntos >= 5 && $totalPuntos <= 11) {
    echo ("<script LANGUAGE='JavaScript'>     window.alert('Felicitaciones, estas ahorrando agua de la mejor manera');     window.location.href='../vista/resultados.php';     </script>");
    //echo "<h3>Felicitaciones, estas ahorrando agua de la mejor manera</h3>";
}elseif ($totalPuntos >= 12 && $totalPuntos <= 19) {
     echo ("<script LANGUAGE='JavaScript'>     window.alert('Bien hecho, eres consciente de la problemática mundial del agua y puedes mejorar tu ahorro de agua');     window.location.href='../vista/resultados.php';     </script>");
   // echo "Bien hecho, eres consciente de la problemática mundial del agua y puedes mejorar tu ahorro de agua";
}elseif ($totalPuntos >= 20 && $totalPuntos <= 27) {
     echo ("<script LANGUAGE='JavaScript'>     window.alert('Usas demasiada agua para tus necesidades reales, lamentablemente para el medio ambiente, eres un usuario normal de agua');     window.location.href='../vista/resultados.php';     </script>");
   // echo "Usas demasiada agua para tus necesidades reales, lamentablemente para el medio ambiente, eres un usuario normal de agua";
}else {
     echo ("<script LANGUAGE='JavaScript'>     window.alert('Eres un gran derrochador de agua. Lee nuestras recomendaciones para ahorrar agua. Ayuda a tu planeta');     window.location.href='../vista/resultados.php';     </script>");
   // echo "Eres un gran derrochador de agua. Lee nuestras recomendaciones para ahorrar agua. Ayuda a tu planeta";
}

//header('Location:../vista/resultados.php');
?>