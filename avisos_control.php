<?php
require './clases/conexion.php';
session_start();
switch ($_REQUEST ['accion']) {
    case 1:
        $sql = "insert into recordatorios (id_recordatorio, mensaje, fecha, id_cita, hora) "
            . "values ((select coalesce(max(id_recordatorio), 0) + 1 from recordatorios), '" . $_REQUEST['mensaje'] . "', '" . $_REQUEST['fecha'] . "', '" . $_REQUEST['id_cita'] . "', '" . $_REQUEST['hora'] . "')";
        $mensaje = 'Registrado Exitosamente';
        break;
    case 2:
        $sql = "update recordatorios set id_recordatorio='".$_REQUEST['id_recordatorio']."',mensaje='".$_REQUEST['mensaje']."',fecha='".$_REQUEST['fecha']."',id_cita='".$_REQUEST['id_cita']."',hora='".$_REQUEST['hora']."'"
            ."where id_recordatorio =".$_REQUEST['id_recordatorio'];
        $mensaje='Modificado Exitosamente';
        break;
    case 3:
        $sql = "delete from recordatorios "
            . "where id_recordatorio =".$_REQUEST['id_recordatorio'];
        $mensaje='Borrado Exitosamente';
        break;
}
if(consultas::ejecutar_sql($sql)){
    $_SESSION['mensaje']=$mensaje;
    header("location:avisos_index.php");
}else{
    $_SESSION['mensaje']='ERROR'. $sql;
    header("location:avisos_index.php");
}
?>