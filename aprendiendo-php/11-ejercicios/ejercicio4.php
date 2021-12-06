<!DOCTYPE HTML>
<html>
    <head>
        <title>calculadora</title>
    </head>
    <body>
        <form action="calculadora.php" method="GET">
            <p>
                <label for="numeroA">numero A</label>
                <input type="number" name="numeroA">
            </p>
            <p>
                <label for="operacion">operacion</label>
                <input type="string" name="operacion">
            </p>
            <p>
                <label for="numeroA">numero B</label>
                <input type="number" name="numeroB">
            </p>            

            <input type="submit" value="calcular">
        </form>
    </body>
</html>