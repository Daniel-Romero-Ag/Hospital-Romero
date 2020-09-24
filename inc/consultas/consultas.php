<?php



if($_POST["accion"]=="registrar"){
    try {
        foreach ($_POST as $key => $value) {
            if($value==""){
                $_POST[$key]=NULL;
                
            }
        }
        $nombre= filter_var($_POST["nombre"],FILTER_SANITIZE_STRING) ;
        $apellido=$_POST["apellido"];
        $edad=$_POST["edad"];
        $telefono=$_POST["telefono"];
        $sexo=$_POST["sexo"];
        $alergias=$_POST["alergias"];
        $tipoSangre=$_POST["tipoSangre"];
        $intervencionesPrevias=$_POST["intervencionesPrevias"];
        $padecimientosPrevios=$_POST["padecimientosPrevios"];
        


        include("bd.php");
        $stmt= $conn->prepare("INSERT INTO `paciente` 
                            ( `nombre`, `apellido`, `edad`, `telefono`,
                             `id_sexo`, `alergias`, `id_tipo_sangre`, `padecimientos_previos`,
                              `intervenciones_previas`) VALUES (?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssiiisiss",$nombre,$apellido,$edad,$telefono,$sexo,$alergias,$tipoSangre,$intervencionesPrevias,$padecimientosPrevios);
        $stmt->execute();
        if($stmt->affected_rows==1){
            $respuesta=array(
                "resultado"=>"bien"
            );
        }else{
            $respuesta=array(
                "resultado"=>"mal"
            );
            
        }
        $stmt->close();
        $conn->close();
        
        echo json_encode($respuesta);
        
    } catch (\Throwable $th) {
        //throw $th;
    }
    
}
if($_POST["accion"]=="agendarCita"){
    $nombre= filter_var($_POST["nombre"],FILTER_SANITIZE_STRING);
    $apellido= filter_var($_POST["apellido"],FILTER_SANITIZE_STRING);
    $id= filter_var($_POST["id"],FILTER_SANITIZE_STRING);
    $fecha= $_POST["fecha"];
    $hora= $_POST["hora"];
    $doctor= $_POST["doctor"];

    include("bd.php");
    $stmt = $conn->prepare('insert into citas(id_doctor,id_paciente,fecha,hora) values(?,?,?,?)');
    $stmt->bind_param("iiss",$doctor,$id,$fecha,$hora);
    $stmt->execute();
    if($stmt->affected_rows==1){
        $respuesta=array(
            "datos" => array(
                "nombre"=> $nombre, 
                "apellido"=> $apellido, 
                "id"=> $id, 
                "fecha"=> $fecha, 
                "hora"=> $hora), 
            "respuesta" => "bien"
        );
    }else{
        $respuesta = array("respuesta"=>"mal");
    }
    $stmt->close();
    $conn->close();
    


    echo json_encode($respuesta);
}
if($_POST["accion"]=="iniciarSesion"){
    $nombre = $_POST["nombre"];
    $id = $_POST["id"];
    include("bd.php");
    $stmt = $conn->prepare('select id_paciente,nombre,apellido from paciente where id_paciente=? and nombre=?;');
    $stmt->bind_param("is",$id,$nombre);
    $stmt->bind_result($id2,$nombre2,$apellido);
    $stmt->execute();
    $stmt->fetch();
   
   
    if($apellido){
        $respuesta="bien";
        echo json_encode (array("resultado" =>$id,"nombre"=>$apellido,"respuesta"=>$respuesta));
    }else{
        $respuesta="mal"; 
        echo json_encode (array("resultado" =>$id,"nombre"=>$apellido,"respuesta"=>$respuesta));
    }

    $conn->close();
    $stmt->close();
  
  
    
    
    
    
    
}


?>



