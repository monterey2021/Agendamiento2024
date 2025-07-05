<?php
require './clases/conexion.php';
session_start();
switch ($_REQUEST ['accion']) {
    case 1:
        $sql = "insert into agenda_medica (id_agenda, nombre_paciente, nombre_medico, fecha, hora, motivo, fecha_creacion, estado) "
            . "values ((select coalesce(max(id_agenda), 0) + 1 from agenda_medica), '" . $_REQUEST['nombrepaci'] . "', '" . $_REQUEST['nombremedi'] . "', '" . $_REQUEST['fecha'] . "', '" . $_REQUEST['hora'] . "', '" . $_REQUEST['descripcion'] . "',NOW(),'Reservada')";
        $mensaje = 'Registrado Exitosamente';
        break;
    case 2:
        $sql = "update agenda_medica set id_agenda='".$_REQUEST['id_agenda']."',nombre_paciente='".$_REQUEST['nombrepaci']."',nombre_medico='".$_REQUEST['nombremedi']."',fecha='".$_REQUEST['fecha']."',hora='".$_REQUEST['hora']."',motivo='".$_REQUEST['descripcion']."',fecha_creacion='".$_REQUEST['creado']."',estado='".$_REQUEST['estado']."'"
            ."where id_agenda =".$_REQUEST['id_agenda'];
        $mensaje='Modificado Exitosamente';
        break;
    case 3:
        $sql = "delete from agenda_medica "
            . "where id_agenda =".$_REQUEST['id_agenda'];
        $mensaje='Borrado Exitosamente';
        break;
}
if(consultas::ejecutar_sql($sql)){
    $_SESSION['mensaje']=$mensaje;
    header("location:registrar_agenda_index.php");
}else{
    $_SESSION['mensaje']='ERROR'. $sql;
    header("location:registrar_agenda_index.php");
}
?>