<?php include_once("inc/templates/header.php") ?>
<?php include_once("inc/templates/navegacion.php") ?>
<main class="seccion">
    <h1>Registro</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est autem cumque officia, perspiciatis assumenda earum ipsa repudiandae quasi ab quibusdam voluptates iste animi laudantium aut perferendis corporis, fugit debitis quo!</p>
    <form action="index.php" class="registroUsuario" method="post" id="formulario-registro">
        <div class="campos">
        <fieldset>
        <legend>Datos Personales</legend>
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre">
            </div>
            <div class="campo">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido">
            </div>
            <div class="campo">
                <label for="edad">Edad:</label>
                <input type="number" id="edad">
            </div>
            <div class="campo">
                <label for="telefono">Telefono:</label>
                <input type="tel" id="telefono">
            </div>
            <div class="campo">
                <p style="display:block; margin:0;">Sexo:</p>
                <input type="radio" name="sexo" id="hombre" value="1">
                <label for="hombre">Hombre</label>
               
                <input type="radio" name="sexo" id="mujer" value="2">
                <label for="mujer">Mujer</label>
                
                <input type="radio" name="sexo" id="otro" value="3">
                <label for="otro">Otro</label>
            </div>
        </fieldset>
        
        <fieldset>
        <legend>Datos Medicos</legend>
            <div class="campo campoTextArea">
                <label for="alergias">Alergias:</label>
                <textarea name="alergias" id="alergias" ></textarea>
            </div>
            <div class="campo">
                <label for="tipoSangre">Tipo de sangre:</label>
                <select name="tipoSangre" id="tipoSangre">
                    <option value="1">O negativo</option>
                    <option value="2">O positivo</option>
                    <option value="3">A negativo</option>
                    <option value="4">A positivo</option>
                    <option value="5">B negativo</option>
                    <option value="6">B positivo</option>
                </select>
            </div>
            <div class="campo campoTextArea">
                <label for="padecimientosPrevios">Padecimientos Previos:</label>
                <textarea name="padecimientosPrevios" id="padecimientosPrevios" ></textarea>
            </div>
            <div class="campo campoTextArea">
                <label for="intervencionesPrevias">Intervenciones Previas:</label>
                <textarea name="intervencionesPrevias" id="intervencionesPrevias" ></textarea>
            </div>
            <input type="hidden" name="accion" id="accion" value="registrar">
        </fieldset>
        </div>
        <input type="submit" value="Registrarse" id="Registrarse">
        
    </form>
</main>

<?include_once("inc/templates/footer.php");?>