<!-- sidebar -->


        <aside id="sidebar">

        <!-- bloque del buscador -->
        <div id="buscador" class="bloque">
                    <h3>buscar</h3>

                    <form action="buscar.php" method="POST">
                        <p>
                            <label for="busqueda">buscar</label>
                            <input type="text" name="busqueda" />
                        </p>
                        <p>
                            <input type="submit" value="buscar" />
                        </p>
                    </form>
                </div>


            <!-- si existe la variable de sesion USUARIO, mostramos el nombre y apellido almacenados en la variable $_SESSION['usuario'] -->
            <?php if(isset($_SESSION['usuario'])): ?>
            <div id="usuario-logueado" class="bloque">
                <h3>bienvenido <?=$_SESSION['usuario']['nombre']  ?></h3>
                <!--<?php var_dump($_SESSION['usuario']); ?>-->

                <a href="crearEntrada.php" class="boton boton-verde">crear entradas</a>
                <a href="crearCategoria.php" class="boton boton-rojo">crear categorias</a>
                <a href="editarDatos.php" class="boton boton-naranja">mis datos</a>
                <a href="cerrar.php" class="boton">cerrar sesion</a>
            </div>
            <?php endif; ?>

            <?php if(!isset($_SESSION['usuario'])): ?>
                <div id="login" class="bloque">
                    <h3>identificacion</h3>

                    <!-- si la sesion $_SESSION['error_login'] esta seteada, significa que hubo algun error, entonces lo mostramos -->
                    <?php if(isset($_SESSION['error_login'])): ?>
                        <div class="alerta alerta-error">
                            <?=$_SESSION['error_login'];?>
                        </div>
                    <?php endif; ?>

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

                    <!-- mostramos los mensajes de exito o error desde las variables de sesion creadas en REGISTRO.PHP  -->
                    <?php if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito"> 
                            <?= $_SESSION['completado'] ?>
                        </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                        <div class="alerta alerta-error">
                            <?= $_SESSION['errores']['general'] ?>
                        </div>
                    <?php endif; ?>

                    <form action="registro.php" method="POST">
                        <p>
                            <label for="apellido">apellido</label>
                            <input type="text" name="apellido" />
                            <!-- utilizamos un operador ternario para verificar si esta seteada la variable de sesion 'errores' -->
                            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?> 
                        </p>
                        <p>
                            <label for="nombre">nombre</label>
                            <input type="text" name="nombre" />
                            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                        </p>
                        <p>
                            <label for="email">eMail</label>
                            <input type="email" name="email" />
                            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                        </p>
                        <p>
                            <label for="password">password</label>
                            <input type="password" name="password" />
                            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
                        </p>
                        <p>
                            <input type="submit" name="submit" value="registrar" />  <!-- name="submit" nos permite analizar en el formulario POST el $_POST['submit'] -->
                        </p>
                    </form>

                <?php echo borrarError(); ?>

            </div>
            <?php endif; ?>
        </aside>