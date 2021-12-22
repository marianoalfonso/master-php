<?php for($a=0;$a<3;$a++) : ?>
    <tr>
        <?php foreach($categorias as $categoria) : ?>
            <td><?=$tabla[$categoria][$a]?></td>
        <?php endforeach; ?>
    </tr>
<?php endfor; ?>