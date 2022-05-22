<h3><?=$nota1->getNombre(); ?></h3>
<h4><?=$nota1->getContenido(); ?></h4>

<h1>listado de notas</h1>
<!-- fetch_object() obtiene un array de objetos -->
<?php while($nota=$notas->fetch_object()): ?>
    <?=$nota->titulo ?> - <?=$nota->descripcion ?> ( <?=$nota->fecha ?> )<br>
<?php endwhile; ?>