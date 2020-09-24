<?php include_once("inc/templates/header.php"); ?>
<?php include_once("inc/templates/navegacion.php"); ?>
<?php include_once("inc/consultas/funciones.php"); ?>
<main class="seccion">
    <h1>Agendar Cita</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, aliquam. Est quis illo soluta repudiandae sed, tempora esse aliquam sint asperiores ipsum eius in doloribus, et sunt, dicta ea commodi.</p>
    <form action="prueba.php" id="formularioCita" method="post">
        <div class="campos">
            <fieldset>
                <legend>Datos Personales</legend>
                
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input required type="text" id="nombre" name="nombre">
                </div>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input required type="text" id="apellido"  name="apellido">
                </div>
                <div class="campo">
                    <label for="id">id:</label>
                    <input required type="text" id="id" name="id">
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Fecha y Doctor</legend>
                <div class="campo">
                        <label for="fecha">Fecha:</label>
                        <input required type="date" id="fecha" name="fecha">
                    </div>
                    <div class="campo">
                        <label for="hora">Hora:</label>
                        <input required type="time" id="hora" name="hora">
                    </div>
                    <?php $doctores= obtenerDoctores();?>
                    <div class="campo">
                        <label for="doctor">Doctor:</label>
                        <select name="doctor" id="doctor"  >
                            <?php foreach ($doctores as $doctor) { ?>    
                            <option value="<?php echo($doctor["id"]); ?>"><?php echo($doctor["nombre"]); ?></option>
                            <?php }?>

                        </select>
                        
                    </div>
            </fieldset>
            <input type="hidden" name="accion"  id="accion" value="agendarCita">
        </div>
        <input type="submit" value="Agendar">
    </form>
                                
    
</main>


<?php include_once("inc/templates/footer.php");?>