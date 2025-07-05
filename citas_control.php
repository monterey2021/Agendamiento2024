<?php
require './clases/conexion.php';
session_start();
switch ($_REQUEST ['accion']) {
    case 1:
        $sql = "insert into citas (id_cita, fecha, motivo, estado, nombre_paciente, nombre_medico, nombre_sucursal, fecha_creacion, id_agenda, hora) "
            . "values ((select coalesce(max(id_cita), 0) + 1 from citas), '" . $_REQUEST['fecha'] . "', '" . $_REQUEST['descripcion'] . "', '" . $_REQUEST['estado'] . "', '" . $_REQUEST['nombrepaci'] . "', '" . $_REQUEST['nombremedi'] . "', '" . $_REQUEST['nombresuc'] . "',NOW(), '" . $_REQUEST['id_agenda'] . "','" . $_REQUEST['hora'] . "')";
        $mensaje = 'Registrado Exitosamente';
        break;
    case 2:
        $sql = "update citas set id_cita='".$_REQUEST['id_cita']."',fecha='".$_REQUEST['fecha']."',motivo='".$_REQUEST['descripcion']."',estado='".$_REQUEST['estado']."',nombre_paciente='".$_REQUEST['nombrepaci']."',nombre_medico='".$_REQUEST['nombremedi']."',nombre_sucursal='".$_REQUEST['nombresuc']."',fecha_creacion='".$_REQUEST['creado']."',id_agenda='".$_REQUEST['id_agenda']."',hora='".$_REQUEST['hora']."'"
            ."where id_cita =".$_REQUEST['id_cita'];
        $mensaje='Modificado Exitosamente';
        break;
    case 3:
        $sql = "delete from citas "
            . "where id_cita =".$_REQUEST['id_cita'];
        $mensaje='Borrado Exitosamente';
        break;
}
if(consultas::ejecutar_sql($sql)){
    $_SESSION['mensaje']=$mensaje;
    header("location:citas_index.php");
}else{
    $_SESSION['mensaje']='ERROR'. $sql;
    header("location:citas_index.php");
}
?>