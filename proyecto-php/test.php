<?php


$db = 'blog_master';
echo 'db: '.$db.'<br/>';

$conn = mysqli_connect('localhost','root','',$db);

if(!$conn) {
    die('error en la conexion'.mysqli_connect_error());
}
echo 'conexion OK<br/>';

// $guardar = mysqli_query($conn, "insert into usuarios values (null, 'mariano', 'alfonso', 'marianoalfonso@gmail.com', 'test1234', '2022-03-11');");

session_start();
echo 'session ID: ',session_id().'<br/>';
$_SESSION['nombre'] = 'mariano';
$_SESSION['geografia'] = 'arcos 2550';
echo $_SESSION['nombre'].'<br/>';
echo $_SESSION['geografia'].'<br/>';
echo 'session ID: ',session_id().'<br/>';

// die();

unset($_SESSION['nombre']);
echo $_SESSION['nombre'].'<br/>';
echo $_SESSION['geografia'].'<br/>';


mysqli_close($conn);

?>