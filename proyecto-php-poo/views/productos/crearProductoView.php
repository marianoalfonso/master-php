<!-- en esta vista solamente muestro los campos a ser cargados y los devuelvo por POST al controlador PRODUCTOS, metodo SAVE
para que sean procesados y guardados en la DB mediante el metodo SAVE del modelo -->

<!-- 
gestionView         >>> boton "crear producto" invoca al controlador PRODUCTOS evento CREAR
productosController >>> invoca a la vista CREARPRODUCTOVIEW
crearProductoView   >>> muestra el formulario y los devuelve por post al controlador PRODUCTOS evento SAVE
productosController >>> envia los datos al modelo PRODUCTOSMODEL evento SAVE donde son guardados en la DB 
 -->


<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
    <h1>editar producto: <?=$pro->nombre ?></h1>
    <?php $url_action = base_url."productos/edit&id=".$pro->id; ?>
<?php else: ?>
    <h1>crear producto</h1>
    <?php $url_action = base_url."productos/save"; ?>
<?php endif; ?>

<div class="form_container">
    <form action="<?=$url_action ?>" method="POST" enctype="multipart/form-data"> <!-- seteamos el action al controlador productos, metodo save -->
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>" />

        <label for="descripcion">descripcion</label>
        <!-- el textarea permite poner mucho mas texto -->
        <textarea name="descripcion"><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>
        
        <label for="precio">precio</label>
        <input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>

        <label for="stock">stock</label>
        <input type="number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>

        <!-- cargamos las categorias desde la tabla -->
        <label for="categoria">categoria</label>
        <?php $categorias = Utils::showCategorias(); ?>
        <select name="categoria">
            <?php while($cat = $categorias->fetch_object()): ?>
                <!-- verifica en la carga de cada opcion si lo cargado es igual a $pro->categoria_id que es el valor que trae el objeto a ser editado, si es asi, muestra el "selected" -->
                <option value="<?=$cat->id ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? "selected" : ''; ?>> <!-- asigno el ID para guardarlo en la tabla ya que es una FK -->
                    <?=$cat->nombre ?> <!-- muestro el nombre de la categoria -->
                </option>
            <?php endwhile; ?>
        </select>

        <label for="imagen">nombre</label>
        <input type="file" name="imagen" />
        
        <input type="submit" value="guardar" />

    </form>
</div>