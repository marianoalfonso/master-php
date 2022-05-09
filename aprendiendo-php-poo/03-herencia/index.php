<?php
    require_once 'clases.php';

    $persona1 = new Persona();
    $persona1->setNombre("Mariano");
    var_dump($persona1);

    $informatico1 = new Informatico();
    $informatico1->setNombre("Violeta");
    var_dump($informatico1);

    $tecnico1 = new tecnicoRedes();
    $tecnico1->setNombre("Miranda");
    var_dump($tecnico1);