<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <title>blog de videojuegos</title>
</head>
<body>
    
    <!-- header -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                blog de videojuegos
            </a>
        </div>

        <!-- menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">inicio</a> 
                </li>
                <li>
                    <a href="index.php">categoria 1</a> 
                </li>
                <li>
                    <a href="index.php">categoria 2</a> 
                </li>
                <li>
                    <a href="index.php">categoria 3</a> 
                </li>
                <li>
                    <a href="index.php">categoria 4</a> 
                </li>
                <li>
                    <a href="index.php">sobre mi</a> 
                </li>
                <li>
                    <a href="index.php">contacto</a> 
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>  <!-- limpia los flotados, asi lo de abajo no se monta con el menu -->

    </header>




    <div id="contenedor">
        <!-- sidebar -->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>identificacion</h3>
                <form action="login.php" method="POST">
                    <p>
                        <label for="email">eMail</label>
                        <input type="email" name="email" />
                    </p>
                    <p>
                        <label for="password">password</label>
                        <input type="password" name="password" />
                    </p>
                    <p>
                        <input type="submit" value="validar" />
                    </p>
                </form>
            </div>

            <div id="register" class="bloque">
                <h3>registro</h3>
                <form action="registro.php" method="POST">
                    <p>
                        <label for="apellido">apellido</label>
                        <input type="text" name="apellido" />
                    </p>
                    <p>
                        <label for="nombre">nombre</label>
                        <input type="text" name="nombre" />
                    </p>
                    <p>
                        <label for="email">eMail</label>
                        <input type="email" name="email" />
                    </p>
                    <p>
                        <label for="password">password</label>
                        <input type="password" name="password" />
                    </p>
                    <p>
                        <input type="submit" value="registrar" />
                    </p>
                </form>
            </div>
        </aside>

        <!-- main content -->
        <div id="principal">
            <!--siempre conviene que haya un H1 en la pagina por los buscadores -->
            <h1>ultimas entradas</h1>
            <article class="entrada">  <!--iguales a un DIV pero semanticamente mejores para los navegadores-->
            <!--You should use a class when you expect there to be multiple similar elements that you would like to retain similar styling-->
                <a href="">
                    <h2>titulo de la entrada: </h2>
                    <p>
                        is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                        and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                        desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                    </p>
                </a>
            </article>

            <article class="entrada">  <!--iguales a un DIV pero semanticamente mejores para los navegadores-->
            <!--You should use a class when you expect there to be multiple similar elements that you would like to retain similar styling-->
                <a href="">    
                    <h2>titulo de la entrada: </h2>
                    <p>
                        is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                        and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                        desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                    </p>
                </a>
            </article>

            <article class="entrada">  <!--iguales a un DIV pero semanticamente mejores para los navegadores-->
            <!--You shold use a class when you expect there to be multiple similar elements that you would like to retain similar styling-->
            <a href="">
                <h2>titulo de la entrada: </h2>
                <p>
                    is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                    and scurambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>
            </a>
            </article>

            <div id="ver-todas">
                <a href="">ver todas las entradas</a>
            </div>

        </div>

        <div class="clearfix"></div> <!--para que el pie de pagina no suba-->

    </div>


    <!-- footer -->
    <footer id="pie">
        <p>desarrollado por Mariano Alfonso &copy; 2022</p>
    </footer>

</body>
</html>