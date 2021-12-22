<?php
require_once "menu.php";
session_start();
//echo $variable_ordinaria."<br/>";
echo $_SESSION['variable_persistente'];
?>