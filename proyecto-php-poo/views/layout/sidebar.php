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
                        <!-- solamente mostramos los dos siguientes items si el usuario es admin -->
                        <?php if(isset($_SESSION["admin"])): ?>
                            <li><a href="<?=base_url?>categorias/index">gestionar categorias</a></li>
                            <li><a href="#">gestionar productos</a></li>
                            <li><a href="#">gestionar pedidos</a></li>
                        <?php endif; ?>
                        <?php if(isset($_SESSION["identity"])): ?>
                            <li><a href="#">mis pedidos</a></li>
                            <li><a href="<?=base_url?>usuarios/logout">cerrar sesion</a></li>
                        <?php else: ?> 
                            <li><a id="registro" href="<?=base_url?>usuarios/registro">registrarse</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </aside>

            <!--CONTENIDO CENTRAL-->
            <div id="central">
