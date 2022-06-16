<h1>gestion de productos</h1>

<a href="<?=base_url?>productos/crear" class="button button-small">
    crear producto
</a>

<!-- verificamos el estado de las variables de sesion para establecer si se grabo o no -->
<?php if(isset($_SESSION["producto"]) && $_SESSION["producto"] == "complete"): ?>
    <strong class="alert_green">el producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION["producto"]) && $_SESSION["producto"] != "failed"): ?>
    <strong class="alert_red">error creando el producto</strong>
<?php endif; ?>
<!-- borramos las sesiones -->
<?php Utils::deleteSession("producto"); ?>

<!-- verificamos el estado de las variables de sesion para establecer si se borro o no -->
<?php if(isset($_SESSION["borrar_producto"]) && $_SESSION["borrar_producto"] == "erased"): ?>
    <strong class="alert_green">el producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION["borrar_producto"]) && $_SESSION["producto"] != "failed"): ?>
    <strong class="alert_red">error creando el producto</strong>
<?php endif; ?>
<!-- borramos las sesiones -->
<?php Utils::deleteSession("borrar_producto"); ?>

<table>
    <tr>
        <th>nombre</th>
        <th>descripcion</th>
        <th>precio</th>
        <th>stock</th>
        <th>acciones</th>
    </tr>
    <?php while($pro = $productos->fetch_object()): ?>
        <tr>
            <td><?=$pro->nombre; ?></td>
            <td><?=$pro->descripcion; ?></td>
            <td><?=$pro->precio; ?></td>
            <td><?=$pro->stock; ?></td>
            <td>
                <!-- pasamos el parametro &id= y no $id= porque es el tercer parametro, no es el unico, los primeros son el controlador y el evento -->
                <a href="<?=base_url?>productos/edit&id=<?=$pro->id?>" class="button button-gestion">editar</a>
                <a href="<?=base_url?>productos/erase&id=<?=$pro->id?>" class="button button-gestion button-red">eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>