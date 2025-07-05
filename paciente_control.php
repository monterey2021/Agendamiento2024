<?php
require './clases/conexion.php';
session_start();
switch ($_REQUEST ['accion']) {
    case 1:
        $sql = "insert into pacientes (id_paciente, nombre, apellido, fecha_nacimiento, dirección, teléfono, email, fecha_creacion) "
            . "values ((select coalesce(max(id_paciente), 0) + 1 from pacientes), '" . $_REQUEST['nombre'] . "', '" . $_REQUEST['apellido'] . "', '" . $_REQUEST['nacimiento'] . "', '" . $_REQUEST['direccion'] . "', '" . $_REQUEST['telefono'] . "', '" . $_REQUEST['email'] . "',NOW())";
        $mensaje = 'Registrado Exitosamente';
        break;
    case 2:
        $sql = "update pacientes set id_paciente='".$_REQUEST['id_paciente']."',nombre='".$_REQUEST['nombre']."',apellido='".$_REQUEST['apellido']."',fecha_nacimiento='".$_REQUEST['nacimiento']."',dirección='".$_REQUEST['direccion']."',teléfono='".$_REQUEST['telefono']."',email='".$_REQUEST['email']."',fecha_creacion='".$_REQUEST['creado']."'"
            ."where id_paciente =".$_REQUEST['id_paciente'];
        $mensaje='Modificado Exitosamente';
        break;
    case 3:
        $sql = "delete from pacientes "
            . "where id_paciente =".$_REQUEST['id_paciente'];
        $mensaje='Borrado Exitosamente';
        break;
}
if(consultas::ejecutar_sql($sql)){
    $_SESSION['mensaje']=$mensaje;
    header("location:paciente_index.php");
}else{
    $_SESSION['mensaje']='ERROR'. $sql;
    header("location:paciente_index.php");
}
?>