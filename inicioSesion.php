<?php include("inc/templates/header.php"); ?>
<?php include("inc/templates/navegacion.php"); ?>
<main class="seccion">
<h1>Inicia Sesion </h1>
<form action="perfil.php" method="post" id="inicioSesion">
    <legend style="font-size:25px">Datos de usuario</legend>
    <div class="campos">
        <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div class="campo">
            <label for="id">Id:</label>
            <input type="text" id="id" name="id">
        </div>
        <input type="hidden" name="accion" id="accion" value="iniciarSesion">
        <input type="submit" value="Inicia Sesion">
    </div>
</form>
</main>


<?php include("inc/templates/footer.php"); ?>