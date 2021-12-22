<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>formularios PHP y HTML</title>
    </head>
    <body>
        <h1>formulario</h1>
        <form action="" method="" enctype="multipart/form-data">
            <label for="nombre">nombre </label>
            <input type="text" name="nombre" maxlength="12" /></br></br>

            <label for="apellido">apellido </label>
            <input type="text" name="apellido" autofocus="autofocus" /></br></br>

            <label for="boton">boton </label>
            <input type="button" name="boton" value="clickMe" /></br></br>

            <label for="sexo">sexo </label></br>
            <input type="checkbox" name="sexo" value="hombre" />
            <label for="hombre">hombre </label></br>
            <input type="checkbox" name="sexo" value="mujer"/>
            <label for="mujer">mujer </label></br>

            <label for="color">color </label>
            <input type="color" name="color" /></br></br>

            <label for="date">date </label>
            <input type="date" name="date" /></br></br>

            <label for="email">email </label>
            <input type="email" name="email" /></br></br>

            <label for="file">file </label>
            <input type="file" name="file" multiple="multiple"/></br></br>

            <label for="number">numero </label>
            <input type="number" name="number" multiple="multiple"/></br></br>

            <label for="password">password </label>
            <input type="password" name="password" /></br></br>

            <label for="radio">continente </label></br></br>
            <p>
                <input type="radio" name="continente" value="America" />
                <label for="radio">America </label></br></br>
                <input type="radio" name="continente" value="Europa" />
                <label for="radio">Europa </label></br></br>
                <input type="radio" name="continente" value="Asia" />
                <label for="radio">Asia </label></br></br>
                <input type="radio" name="continente" value="Oceania" />
                <label for="radio">Oceania </label></br></br>
                <input type="radio" name="continente" value="Africa" />
                <label for="radio">Africa </label></br></br>
                <input type="radio" name="continente" value="Antartida" />
                <label for="radio">Antartida </label>
            </p>
            
            <label for="url">url </label>
            <input type="url" name="url" /></br></br>

            <select name="peliculas">
                <option value="spiderman">spiderman</option>
                <option value="batman">batman</option>
                <option value="3">superman</option>
                <option value="4">capitan america</option>
            </select>

            <input type="submit" value="enviar" />

        </form>
    </body>
</html>