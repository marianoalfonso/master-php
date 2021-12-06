<!DOCTYPE HTML>
<html>
    <head>
        <title>tablas de multiplicar</title>
    </head>
    <body>
        <table border="1">
            <?php
                for ($a = 1; $a < 11; $a++) {
                    echo '<tr align="center">';
                    for ($b = 1; $b < 11; $b++) {
                        echo "<td>".($a * $b)."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>



