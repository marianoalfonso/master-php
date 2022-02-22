<?php
echo 'estableciendo conexion<br/>';

//conectamos con la base
$conexion = mysqli_connect("localhost","root","","llamacielo");

//comprobamos conexion
if(mysqli_connect_errno()){
    echo 'se produjo un error: '.mysqli_connection_errno();
} else {
    echo 'conexion establecida';
}

//consultamos la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf-8'");

//consulta
$query = mysqli_query($conexion, "select * from usuarios");
// $usuarios = mysqli_fetch_assoc($query);

while($usuario = mysqli_fetch_assoc($query)) {
    echo($usuario["usuario_nombre"])."<br/>";
    echo($usuario["usuario_email"])."<br/>";
    echo'-----------------------------------<br/>';
}

// //insertar un dato
// $sql = "insert into usuarios values (8,1,'usuario prueba 8',26543334,'test123','2022-02-14',1,'usuario8@llamacielo.com')";
// echo 'pase el sql<br/>';
// $query = mysqli_query($conexion, $sql);
// echo 'pase la query<br/>';
// if($query) {
//     echo 'datos insertados correctamente<br/>';
// } else {
//     echo 'error insertando los datos: '.mysqli_error($conexion);
// }



?>