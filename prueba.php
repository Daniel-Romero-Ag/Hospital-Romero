<?php 
include("inc/consultas/bd.php");

$nombre= "Daniel";
        $apellido="Romero";
        $edad=22;
        $telefono=99838388;
        $sexo=1;
        $alergias="asdasdsadasdasdas";
        $tipoSangre=1;
        $intervencionesPrevias="asdasdas";
        $padecimientosPrevios="sadasd";
        


        include("bd.php");
        $stmt= $conn->prepare("INSERT INTO `paciente` 
                            ( `nombre`, `apellido`, `edad`, `telefono`,
                             `id_sexo`, `alergias`, `id_tipo_sangre`, `padecimientos_previos`,
                              `intervenciones_previas`) VALUES (?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssiiisiss",$nombre,$apellido,$edad,$telefono,$sexo,$alergias,$tipoSangre,$intervencionesPrevias,$padecimientosPrevios);
        $stmt->execute();
        



    
?>

<pre>
<?php var_dump($stmt); ?>
</pre>
