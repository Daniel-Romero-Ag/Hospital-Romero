
  <?php include_once("inc/templates/header.php") ?>
  <?php include("inc/consultas/funciones.php"); ?>
  <!-- Add your site or application content here -->
<header class="logo">
<h1>Hospital Romero</h1>
  <nav>
    <a href="#"><i class="fab fa-facebook-square"></i></a>
    <a href="#"><i class="fab fa-whatsapp"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
  </nav>
</header>
<?php include_once("inc/templates/navegacion.php") ?>
  <main class="seccion">
    <h2>Bienvenido</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing etetur adipisicing etetur adipisicing etetur adipisicing etetur adipisicing etetur adipisicing elit. Tempora, amet. Dolores totam laudantium, dolorem, officia corporis maxime velit alias nulla doloribus error repudiandae exercitationem recusandae tenetur aspernatur aperiam inventore quos!</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, amet. Dolores totam laudantium, dolorem, officia corporis maxime velit alias nulla doloribus error repudiandae exercitationem recusandae tenetur aspernatur aperiam inventore quos!</p>
  </main>
  <section class="seccion">
    <h2>Especialidades</h2>
    <p>En nuestro hospital contamos con personal altamente capacitado en las siguientes areas:</p>
    <ul class="especialidades">
      <?php 
        $especialidades = obtenerEspecialidades();
        foreach ($especialidades as $especialidad) { ?>
         <li class="especialidad"><h3><?php echo($especialidad["especialidad"]); ?></h3>
          <p> <?php echo($especialidad["resumen_especialidad"]); ?>  
            <div class="botones-especialidad">
              <a href="doctores.php?especializacion=<?php echo($especialidad["id_especialidad"]) ?>">Doctores</a> <a href="info_especialidad.php?especialidad=<?php echo($especialidad["id_especialidad"]) ?>">Ver Mas</a>
            </div>
            </p> 
        </li>
      <?php } ?>
    </ul>
  </section>
<section class="seccion">
  <h2>Estudios</h2>
  <div class="estudios">
  <?php 
    $estudios= obtenerEstudios();
   
    foreach ($estudios as $estudio) { ?>
      
      <a href="estudio.php?estudio=<?php echo($estudio["nombre_estudio"]); ?>&id_estudio=<?php echo($estudio["id_estudio"]); ?>" class="estudio"> 
        <div >
          <h3><?php echo($estudio["nombre_estudio"]); ?></h3>
          <img src="img/estudio<?php echo($estudio["id_estudio"]); ?>.jpg" alt=<?php echo($estudio["nombre_estudio"]); ?>>
        </div>
      </a>
      
    <?php } ?>     
</section>
<section class="seccion">
  <h2>Ubicación</h2>
  <div class="ubicacion" id="ubicacion"></div>
</section>

<?include_once("inc/templates/footer.php");?>