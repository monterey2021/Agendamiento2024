<?php
require './clases/conexion.php';
session_start();
switch ($_REQUEST ['accion']) {
    case 1:
        $sql = "insert into medicos (id_medico, nombre, apellido, especialidad, teléfono, email, fecha_creacion) "
            . "values ((select coalesce(max(id_medico), 0) + 1 from medicos), '" . $_REQUEST['nombre'] . "', '" . $_REQUEST['apellido'] . "', '" . $_REQUEST['especialidad'] . "', '" . $_REQUEST['telefono'] . "', '" . $_REQUEST['email'] . "',NOW())";
        $mensaje = 'Registrado Exitosamente';
        break;
    case 2:
        $sql = "update medicos set id_medico='".$_REQUEST['id_medico']."',nombre='".$_REQUEST['nombre']."',apellido='".$_REQUEST['apellido']."',especialidad='".$_REQUEST['especialidad']."',teléfono='".$_REQUEST['telefono']."',email='".$_REQUEST['email']."',fecha_creacion='".$_REQUEST['creado']."'"
            ."where id_medico =".$_REQUEST['id_medico'];
        $mensaje='Modificado Exitosamente';
        break;
    case 3:
        $sql = "delete from medicos "
            . "where id_medico =".$_REQUEST['id_medico'];
        $mensaje='Borrado Exitosamente';
        break;
}
if(consultas::ejecutar_sql($sql)){
    $_SESSION['mensaje']=$mensaje;
    header("location:medico_index.php");
}else{
    $_SESSION['mensaje']='ERROR'. $sql;
    header("location:medico_index.php");
}
?>