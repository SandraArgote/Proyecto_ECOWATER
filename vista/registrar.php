<!DOCTYPE HTML>


<html lang="esp">

<head>
    <meta charset="utf-8" />
    <title>Registrase</title>
    <link rel="icon" type="image/png" href="img/icon.png" />
</head>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/estilos.css" />

<body class="fondo">


    <header>

        <div class="contenedor-two">
            <div class="cont-two">

                <img src="img/logo2.png" alt="Archivo no disponible" width="300rem" height="60rem" />

                <!-- NAVEGACIÓN-->
                <nav class="navegacion-two">
                    <a href="index.html">INICIO</a>

                </nav>
            </div>

        </div>

    </header>

    <form action="../controlador/insertarUser.php" method="post" class="formulario form-2">

    <img src="img/usuario-a.png" alt="" height="120rem" class="centrado" >
       

        <label for="">Nombre</label>
        <input type="text" name="nombre" required /><br>

        <label for="">Apellidos</label>
        <input type="text" name="apellidos" required /><br>

        <label for="">Usuario</label>
        <input type="text" name="username" required /><br>
        
        
        <label for="">Contraseña</label>
        <input type="password" name="password" required /><br>

        <input type="submit" value="Registrar" class="boton-azul centrado" />

    </form>


</body>

</html>

