<?php

    // require_once 'usuario.php';
    // require_once 'categoria.php';
    // require_once 'entrada.php';
    require_once 'autoload.php';

    // $usuario1 = new Usuario('Mariano','marianoalfonso@gmail.com');
    // $categoria1 = new Categoria('accion','review de cada categoria1');
    // $entrada1 = new Entrada('review del GTA 5','5 de mayo de 2020');

    // echo $usuario1->getNombre()."<br>";
    // echo $categoria1->getNombre()."<br>";
    // echo $entrada1->getTitulo()."<br>";
    // echo $entrada1->getFecha()."<br>";

    // ESPACIOS DE NOMBRES (namespaces)

    // si fueran varias subcarpetas anidadas, esto nos permite reducir
    // la llamada al momento de crear la clase y usarla como siempre a1 = new a;
    use Clases1\Usuario;
    use Clases2\Usuario as usuarioAdmin;
    use Clases2\Categoria;
    use Clases2\Entrada;
    // podemos referenciarlos tambien en una sola linea

    class Principal {
        public $usuario;
        public $categoria;
        public $entrada;

        public function __construct() {
            // al definir la clase, debemos pasarle el namespace\clase
            // generalmente la carpeta que contenga las clases del mismo grupo debe llamarse igual que el namespace
            // la carpeta clases en el root lo usa el autoloader
            $this->usuario = new Usuario('mariano','gmail');
            // $this->usuario = new Clases1\Usuario('mariano','gmail');
            $this->categoria = new Categoria('deporte','futbol1');
            // $this->categoria = new Clases2\Categoria('deporte','futbol1');

        }

        public function getUsuario() {
            return $this->usuario;
        }

        public function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        // obtenemos informacion de la clase
        public function informacion() {
            echo '<br>testeando INFORMACION<br>';
            echo __CLASS__."<br>";
            echo __METHOD__."<br>";
        }

    }

    $principal1 = new Principal();
    var_dump($principal1->usuario);
    var_dump($principal1->categoria);


    $principal1->informacion();

    echo '<br><br>muestro los metodos del objeto $principal1<br>';
    var_dump(get_class_methods($principal1));
    
    echo '<br>busco el metodo getUsuario en el array $metodos<br>';
    $metodos = get_class_methods($principal1);
    $busqueda = array_search('getUsuario',$metodos);
    var_dump($busqueda);

    $entrada1 = new Entrada('fifa 2022','20220512');
    // $entrada1 = new Clases2\Entrada('fifa 2022','20220512');
    var_dump($entrada1);

    // referenciamos a la clase por el alias, porque ya hay un nombre repetido
    $usuario2 = new usuarioAdmin('Violeta','gmail');
    var_dump($usuario2);

    // comprobamos si existe una clase
    $clase = class_exists('Clases1\Usuario');
    if($clase) {
        echo "<h2>la clase Clases1\Usuario existe<h2>";
    } else {
        echo "<h2>la clase Clases1\Usuario NO existe<h2>";
    }
