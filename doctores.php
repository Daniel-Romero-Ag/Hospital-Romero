<?php include_once("inc/templates/header.php") ?>
<?php include_once("inc/templates/navegacion.php") ?>
<?php include_once("inc/consultas/funciones.php");?>
<main class="seccion">

<!-- select * from citas inner join paciente on citas.id_paciente=paciente.id_paciente inner join doctores on doctores.id_doctor=citas.id_doctor where doctores.id_doctor=41 -->
        
<?php $especialidad=obtenerEspecialidad($_GET["especializacion"]); ?>
<h1><?php echo $especialidad ?></h1>
<div class="doctores">
<?php $doctores =obtenerDoctoresEspecialidad($_GET["especializacion"]);?>
        <?php foreach ($doctores as $doctor) { ?>            
            <div class="doctor">
                <img src="img/doctor1.png" alt="imagen  ">    
                <div class="info-doctor botones-especialidad">
                    <h2><?php echo($doctor["nombre"] . " " . $doctor["apellido"] );?></h2>
                    <p><?php echo($doctor["desc_doctor"]);?></p> 
                    <a href="">Agendar Cita</a>
                </div>
            </div>
        <?php } ?>
</div>
</main>


<?include_once("inc/templates/footer.php");?>