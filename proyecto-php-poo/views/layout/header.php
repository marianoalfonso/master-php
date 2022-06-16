<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> <!-- para que las ñ y las tildes aparezcan bien -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>padron de afiliados</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
</head>
<body>
    <!-- con el siguiente DIV agrupamos todo el contenido en un div para estilos generales -->
    <!-- centramos todo de una vez, aplicamos sombras una vez, etc -->
    <div id="container">    
        <!--CABECERA-->
        <header id="header">    <!--es igual a DIV pero mejor a nivel de metadatos -->
            <div id="logo">
                <img src="<?=base_url?>assets/img/logo.jpg" alt="logo" />
                <a href="index.php">
                    <!-- Tienda de Ropa -->
                    padron de beneficiarios Incluir Salud
                </a>
            </div>
        </header>

        <!--MENU-->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">inicio</a>
                </li>
                <?php while($cat=$categorias->fetch_object()): ?>
                    <li>
                        <a href="#"><?=$cat->nombre; ?></a>
                    </li>                   
                <?php endwhile; ?>
            </ul>
        </nav>
        
        <div id="content">  <!-- en este div agrupamos la barra lateral y el contenido central -->