<?php include_once("inc/templates/header.php") ?>
<?php include_once("inc/templates/navegacion.php") ?>
<?php include_once("inc/consultas/funciones.php");?>

<?php 
    $resultado= obtenerEspecialidad($_GET["especialidad"]);
    
?>
<div class="seccion info-especialidad">
    <main>
    
        <h1><?php echo $resultado; ?></h1>
        <p>Lorem ipsum dolor sit, amet consectetur adit, amet consectetur adit, amet consectetur adit, amet consectetur adipisicing elit. Voluptatum sapiente alias placeat sequi, iste deserunt obcaecati reiciendis non, soluta suscipit vitae delectus pariatur dolore minus cum dolor id laborum nobis?</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum sit. Voluptatum sit. Voluptatum sit. Voluptatum s   apiente alias placeat sequi, iste deserunt obcaecati reiciendis non, soluta suscipit vitae delectus pariatur dolore minus cum dolor id laborum nobis?</p>
        <img src="img/especialidad1.jpg" alt="">
    </main>
    <aside class="doctores-resumen">
    <h2>Doctores</h2>
    <div class="doctores">
    <div class="doctor">
        <img src="img/doctor1mini.png" alt="imagen  ">    
        <div class="info-doctor botones-especialidad">
            <h2>Juan Perez</h2>
            <p>Lorem ipsum poris at atibus uspes provident itaque.</p> 
            <a href="">Agendar Cita</a>
        </div>
    </div>
    <div class="doctor">
        <img src="img/doctor2mini.png" alt="imagen  ">    
        <div class="info-doctor botones-especialidad">
            <h2>Juan Perez</h2>
            <p>Lorem iptas dolores placeat nulriores ducent itaque.</p> 
            <a href="">Agendar Cita</a>
        </div>
    </div>
    <div class="doctor">
        <img src="img/doctor3mini.png" alt="imagen  ">    
        <div class="info-doctor botones-especialidad">
            <h2>Juan Perez</h2>
            <p>Loremporis at neiores ducimus provident itaque.</p> 
            <a href="">Agendar Cita</a>
        </div>
    </div>
</div>
    </aside>
</div>


<?include_once("inc/templates/footer.php");?>