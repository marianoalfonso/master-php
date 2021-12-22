<?php
    require_once "menu.php";
    session_start();
    $variable_ordinaria = "soy una variable ordinaria";
    $_SESSION['variable_persistente'] = "soy una variable persistente";

    echo $variable_ordinaria."<br/>";
    echo $_SESSION['variable_persistente'];

?>
