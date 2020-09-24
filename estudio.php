<?php include_once("inc/templates/header.php");  ?>
<?php include("inc/consultas/funciones.php"); ?>
<?php include_once("inc/templates/navegacion.php") ?>

<main class="seccion">
    <?php $estudio= obtenerEstudio($_GET["id_estudio"]);
            
            foreach ($estudio as $valoresEstudio) {
                $nombre_estudio=$valoresEstudio["nombre_estudio"];
                $desc_estudio=$valoresEstudio["desc_estudio"];
                $benef_estudio=$valoresEstudio["benef_estudio"];
                $metodologia=$valoresEstudio["metodologia"];
            }
           
    ?>
    <h1><?php echo($nombre_estudio); ?></h1>
    <p><?php echo($desc_estudio);?></p>
    <?php 
        $beneficios = explode("|",$benef_estudio);
    ?>
    <div class="informacion-estudio">
        <div class="contenedor-beneficios">
            <h2  style="text-align:left;">Beneficios</h2>
            <ul class="beneficios">
            <?php 
            $contador=1;
            foreach($beneficios as $beneficio){ ?>
                <li class="beneficio">
                    <p><?php echo("<hr>".$contador . ".- ".$beneficio); $contador++;?></p>
                </li>
            <?php } ?>
            </ul>
        </div>
        <div class="contenedor-metodologia">
            <h2 style="text-align:left;">Metodoligia</h2>
            <ul>
                <?php $pasosMetodologia= explode("|",$metodologia); $contador=1;?>
                <?php foreach ($pasosMetodologia as $pasoMetodologia) {
                    echo ("<hr>Paso ".$contador.".- ".$pasoMetodologia);
                    $contador++;
                } ?>
            </ul>
        </div>
    </div>
</main>

<?include_once("inc/templates/footer.php");?>