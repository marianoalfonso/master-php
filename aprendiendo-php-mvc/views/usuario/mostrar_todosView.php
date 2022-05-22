<!-- dentro de las vistas, se genera una carpeta para cada controlador, y dentro de esta
todos los archivos para cada accion -->
<h1>usuarios obtenidos</h1>

<?php while($usuario=$usuarios->fetch_object()): ?>
    <?=$usuario->apellidos ?> - <?=$usuario->nombre ?> ( <?=$usuario->email ?> )<br>
<?php endwhile; ?>