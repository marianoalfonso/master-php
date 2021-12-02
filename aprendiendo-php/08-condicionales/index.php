<p>
<?php
$color = "rojo";
if($color == "rojo") {
    echo "el color es rojo";
} else {
    echo "el color no es rojo";
}
?>
</p>
<p>
<?php 
if(strlen($color) > 4) {
    echo "el color tiene mas de 4 caracteres";
} else {
    echo "el color tiene 4 o menos caracteres";
}
?>
</p>