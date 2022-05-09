<?php

function mostrarError($errores, $campo) {
    $alerta = ''; //por defecto la variable alerta esta vacia
    if(isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
    return $alerta;
}

function borrarError() {
    //borramos las variables de sesion de guardado
    if(isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;    
        unset($_SESSION['errores']);    //eliminamos la variable de sesion
    }

    if(isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;    
    }

    if(isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);    //eliminamos la variable de sesion
    }

    return null;
}

function conseguirCategorias($conexion) {
    $sql = "select * from categorias order by id asc";
    $categorias = mysqli_query($conexion, $sql);
    $result = array();  //asignamos un array vacio
    if($categorias && mysqli_num_rows($categorias) >= 1) {
        $result = $categorias;
    }
    return $result;
}

function conseguirCategoria($conexion, $id) {
    $sql = "select * from categorias where id = $id";
    $categoria = mysqli_query($conexion, $sql);
    $result = array();  //asignamos un array vacio
    if($categoria && mysqli_num_rows($categoria) >= 1) {
        $result  = mysqli_fetch_assoc($categoria);
    }
    return $result;
}

function obtenerEntradas($conexion) {
    $sql = "select e.*, c.nombre as 'categoria' from entradas e inner join categorias c on e.categoria_id = c.id order by c.id desc limit 4";
    $entradas = mysqli_query($conexion, $sql);
    $result = array();
    if($entradas && mysqli_num_rows($entradas) >= 1) {
        $result = $entradas;
    }
    return $entradas;
} 

function obtenerAllEntradas($conexion, $limit = null, $categoria = null, $busqueda = null) {
    $sql = "select e.*, c.nombre as 'categoria' from entradas e inner join categorias c on e.categoria_id = c.id";

    // si $categoria no esta vacio viene del metodo de ver categoria
    if(!empty($categoria)){
        $sql .= " where e.categoria_id = $categoria";
    }

    // si $busqueda no esta vacio viene del metodo de buscar
    if(!empty($busqueda)){
        $sql .= " where e.titulo like '%$busqueda%'";
    }

    $sql .= " order by c.id desc";
    $entradas = mysqli_query($conexion, $sql);
    $result = array();
    if($entradas && mysqli_num_rows($entradas) >= 1) {
        $result = $entradas;
    }
    return $entradas;
}

function obtenerEntrada($conexion, $id){
    $sql = "select e.*,c.nombre as 'categoria' from entradas e inner join categorias c".
        " on e.categoria_id = c.id".
        " where e.id = $id;";
    $entrada = mysqli_query($conexion, $sql);
    $resultado = array();
    if($entrada && mysqli_num_rows($entrada) >= 1){
        $resultado = mysqli_fetch_assoc($entrada);
    }

    return $resultado;
}

function obtenerUsuario($conexion, $id){
    $sql = "select * from usuarios where id = $id";
    $usuario = mysqli_query($conexion, $sql);
    $resultado = array();   //creo el array para almacenar si se devuelven resultados
    if($usuario && mysqli_num_rows($usuario) >= 1){ //si se seteo $usuario y existe al menos un registro
        $resultado = mysqli_fetch_assoc($usuario);  //asigno el resultado de $usuario al array $resultado
    }
    return $resultado;
}