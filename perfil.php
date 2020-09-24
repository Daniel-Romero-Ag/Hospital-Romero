<?php include("inc/templates/header.php"); ?>
<?php include("inc/templates/navegacion.php"); ?>
<?php include("inc/consultas/funciones.php"); ?>
<hr>
<hr>
<pre>
    <?php var_dump(obtenerCitasPaciente($_POST["usuario"]));  ?>
</pre>
<hr>
<hr>
<hr>
<main class="seccion">
    <h1>Bienvenido Daniel</h1>
    <div class="contenedor-citas-perfil">
        <h2>Citas agendadas:</h2>
        <div class="citas-perfil">
            <?php $citas=obtenerCitasPaciente($_POST["usuario"]); ?>
            <?php foreach ($citas as $cita) { ?>
                <div class="cita-perfil">
                    <p>Dia: <?php echo($cita["fecha"]); ?></p>
                    <p>Hora: <?php echo($cita["hora"]); ?></p>
                    <p>Doctor: <?php echo($cita["nombre_doctor"] . " " . $cita["apellido_doctor"]); ?> </p>
                </div>

            <?php } ?>
            
            <div class="cita-perfil">
                <p>Dia: 10 enero 2020</p>
                <p>Hora: 19:00</p>
                <p>Doctor: Juan Perez</p>
            </div>
            <div class="cita-perfil">
                <p>Dia: 10 enero 2020</p>
                <p>Hora: 19:00</p>
                <p>Doctor: Juan Perez</p>
            </div>
            <div class="cita-perfil">
                <p>Dia: 10 enero 2020</p>
                <p>Hora: 19:00</p>
                <p>Doctor: Juan Perez</p>
            </div>
            <div class="cita-perfil">
                <p>Dia: 10 enero 2020</p>
                <p>Hora: 19:00</p>
                <p>Doctor: Juan Perez</p>
            </div>
            <div class="cita-perfil">
                <p>Dia: 10 enero 2020</p>
                <p>Hora: 19:00</p>
                <p>Doctor: Juan Perez</p>
            </div>
            <div class="cita-perfil">
                <p>Dia: 10 enero 2020</p>
                <p>Hora: 19:00</p>
                <p>Doctor: Juan Perez</p>
            </div>
        </div>
    </div>
    <div class="contenedor-estudios-perfil">
        <h2>Estudios agendados</h2>
        <div class="estudios-perfil">
        </div>
    </div>
       
        
</main>


<?php include("inc/templates/footer.php"); ?>