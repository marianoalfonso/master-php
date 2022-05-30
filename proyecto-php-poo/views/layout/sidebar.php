            <!--BARRA LATERAL-->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <!-- si NO esta logueado, mostramos las opciones de login -->
                    <?php if(!isset($_SESSION["identity"])): ?>
                        <h3>ingresar a la web</h3>
                        <form action="<?=base_url?>usuarios/login" method="POST">
                            <label for="email">email</label>
                            <input type="email" name="email" />
                            <label for="password">password</label>
                            <input type="password" name="password" />             
                            <input type="submit" value="enviar" />       
                        </form>
                    <!-- si esta logueado, mostramos el nombre de usuario -->
                    <?php else: ?>  
                        <h3><?=$_SESSION["identity"]->nombre; ?> <?=$_SESSION["identity"]->apellidos; ?></h3>
                    <?php endif; ?>

                    <ul>
                        <li>
                            <a href="#">mis pedidos</a>
                        </li>
                        <li>
                            <a href="#">gestionar pedidos</a>
                        </li>
                        <li>
                            <a href="#">gestionar categorias</a>
                        </li>
                        <li>
                            <?php if(isset($_SESSION["identity"])): ?>
                                <a href="<?=base_url?>usuarios/logout">cerrar sesion</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </aside>

            <!--CONTENIDO CENTRAL-->
            <div id="central">
