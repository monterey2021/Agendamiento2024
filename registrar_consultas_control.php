<?php
require './clases/conexion.php';
session_start();
switch ($_REQUEST ['accion']) {
    case 1:
        $sql = "insert into consultas (id_consulta, id_cita, id_agenda, fecha, tratamiento, observaciones, fecha_creacion) "
            . "values ((select coalesce(max(id_consulta), 0) + 1 from consultas), '" . $_REQUEST['id_cita'] . "', '" . $_REQUEST['id_agenda'] . "', '" . $_REQUEST['fecha'] . "', '" . $_REQUEST['tratamiento'] . "', '" . $_REQUEST['observaciones'] . "',NOW())";
        $mensaje = 'Registrado Exitosamente';
        break;
    case 2:
        $sql = "update consultas set id_consulta='".$_REQUEST['id_consulta']."',id_cita='".$_REQUEST['id_cita']."',id_agenda='".$_REQUEST['id_agenda']."',fecha='".$_REQUEST['fecha']."',tratamiento='".$_REQUEST['tratamiento']."',observaciones='".$_REQUEST['observaciones']."',fecha_creacion='".$_REQUEST['creado']."'"
            ."where id_consulta =".$_REQUEST['id_consulta'];
        $mensaje='Modificado Exitosamente';
        break;
    case 3:
        $sql = "delete from consultas "
            . "where id_consulta =".$_REQUEST['id_consulta'];
        $mensaje='Borrado Exitosamente';
        break;
}
if(consultas::ejecutar_sql($sql)){
    $_SESSION['mensaje']=$mensaje;
    header("location:registrar_consultas_index.php");
}else{
    $_SESSION['mensaje']='ERROR'. $sql;
    header("location:registrar_consultas_index.php");
}
?>