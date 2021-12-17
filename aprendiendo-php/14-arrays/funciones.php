<?php

$musicos = ['sting','phil collins','abba','john mayer','sheryl crowe'];

$musicos[] = "harry styles";
array_push($musicos, 'michael jackson');

//asort($musicos);
echo"<h2>listado de musicos</h2>";
echo"<ul>";
foreach($musicos as $key => $musico) {
    echo "<li>".$key." - ".$musico."</li>";
}
echo"</ul>";

$musicos2 = array_reverse($musicos);
echo"<h2>listado de musicos en orden inverso</h2>";
echo"<ul>";
foreach($musicos2 as $key => $musico) {
    echo"<li>".$key." - ".$musico."</li>";
}
echo"</ul>";


?>