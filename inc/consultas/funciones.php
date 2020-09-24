<?php 
function obtenerEspecialidades(){
    include("bd.php");
    try {
        return $conn->query("select * from especialidades");
    } catch (\Throwable $th) {
        return false;
    }
}
function obtenerEstudios(){
    include("bd.php");
    try {
        return $conn->query("select id_estudio, nombre_estudio from estudios");
    } catch (\Throwable $th) {
        //throw $th;
    }
}
function obtenerEstudio($id_estudio){
    include("bd.php");
    try {
        return $conn->query("select * from estudios where id_estudio=".$id_estudio);
    } catch (\Throwable $th) {
        //throw $th;
    }
}

function ObtenerDoctores(){
    include("bd.php");
    $stmt = $conn->prepare("select id_doctor,nombres,apellidos from doctores;");
    $stmt->bind_result($id,$nombres, $apellidos);
    $stmt->execute();
    $arrayNombres=array();
    while($stmt->fetch()){
        $arrayNombres[]= array(
            "nombre" => $nombres." ".$apellidos,
            "id"=> $id
        );
        
    }
    $stmt->close();
    $conn->close();
    return $arrayNombres;
}
function obtenerEspecialidad($id_especialidad){
    include("bd.php");
    $stmt = $conn-> prepare("select especialidad from especialidades where id_especialidad=?");
    $stmt->bind_param("i",$id_especialidad);
    $stmt->bind_result($especialidad);
    $stmt->execute();
    $stmt->fetch();
    return $especialidad;
}
function obtenerDoctoresEspecialidad($id_especialidad){
    include("bd.php");
    $stmt= $conn->prepare("select id_doctor,nombres,apellidos,des_doctor from doctores where id_especialidad=?;");
    $stmt->bind_param("i",$id_especialidad);
    $stmt->bind_result($id_doctor,$nombre,$apellido,$desc_doctor);
    $stmt->execute();
    $resultados=array();
    while($stmt->fetch()){
        $resultados[]=array(
            "id_doctor"=>$id_doctor,
            "nombre"=>$nombre,
            "apellido"=>$apellido,
            "desc_doctor"=>$desc_doctor
        );
    }
    $stmt->close();
    $conn->close();
    return $resultados;

}
function obtenerCitasPaciente($id_paciente){
    include("bd.php");
    $stmt= $conn->prepare("SELECT fecha,hora,doctores.nombres,doctores.apellidos FROM CITAS INNER JOIN PACIENTE ON PACIENTE.id_paciente = CITAS.id_paciente inner join doctores on doctores.id_doctor=citas.id_doctor where citas.id_paciente=?");
    $stmt->bind_param("i",$id_paciente);
    $stmt->bind_result($fecha,$hora,$nombre_doctor,$apellido_doctor);
    $stmt->execute();
    $citas=array();
    while($stmt->fetch()){
        $citas[]=array(
            "fecha"=>$fecha,
            "hora"=>$hora,
            "nombre_doctor"=>$nombre_doctor,
            "apellido_doctor"=>$apellido_doctor
        );
    }
    return $citas;
}


?>