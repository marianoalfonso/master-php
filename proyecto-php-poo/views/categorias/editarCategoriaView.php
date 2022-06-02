<h1>editar categoria</h1>
<!-- categorias/save (metodo del controlador) -->
<form action="<?=base_url?>categorias/save" method="POST">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" required />

    <input type="submit" value="guardar">

</form>