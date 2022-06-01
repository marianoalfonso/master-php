<h1>gestionar categorias</h1>

<?php while($cat = $categorias->fetch_object()): ?>
    <?=$cat->nombre; ?><br>
<?php endwhile; ?>