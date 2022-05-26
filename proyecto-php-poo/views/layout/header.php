<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> <!-- para que las ñ y las tildes aparezcan bien -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda de ropa</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body>
    <!-- con el siguiente DIV agrupamos todo el contenido en un div para estilos generales -->
    <!-- centramos todo de una vez, aplicamos sombras una vez, etc -->
    <div id="container">    
        <!--CABECERA-->
        <header id="header">    <!--es igual a DIV pero mejor a nivel de metadatos -->
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="camiseta logo" />
                <a href="index.php">
                    Tienda de Ropa
                </a>
            </div>
        </header>

        <!--MENU-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">inicio</a>
                </li>
                <li>
                    <a href="#">categoria 1</a>
                </li>
                <li>
                    <a href="#">categoria 2</a>
                </li>
                <li>
                    <a href="#">categoria 3</a>
                </li>
                <li>
                    <a href="#">categoria 4</a>
                </li>
                <li>
                    <a href="#">categoria 5</a>
                </li>
            </ul>
        </nav>
        
        <div id="content">  <!-- en este div agrupamos la barra lateral y el contenido central -->