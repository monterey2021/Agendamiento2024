<?php
require './clases/conexion.php';
session_start();
switch ($_REQUEST ['accion']) {
    case 1:
        $sql = "insert into sucursal (id_sucursal, nombre, dirección, ciudad, estado, país, código_postal, teléfono, email, fecha_creacion) "
            . "values ((select coalesce(max(id_sucursal), 0) + 1 from sucursal), '" . $_REQUEST['nombre'] . "', '" . $_REQUEST['direccion'] . "', '" . $_REQUEST['ciudad'] . "', '" . $_REQUEST['estado'] . "', '" . $_REQUEST['pais'] . "', '" . $_REQUEST['postal'] . "', '" . $_REQUEST['telefono'] . "', '" . $_REQUEST['email'] . "',NOW())";
        $mensaje = 'Registrado Exitosamente';
        break;
    case 2:
        $sql = "update sucursal set id_sucursal='".$_REQUEST['id_sucursal']."',nombre='".$_REQUEST['nombre']."',dirección='".$_REQUEST['direccion']."',ciudad='".$_REQUEST['ciudad']."',estado='".$_REQUEST['estado']."',país='".$_REQUEST['pais']."',código_postal='".$_REQUEST['postal']."',teléfono='".$_REQUEST['telefono']."',email='".$_REQUEST['email']."',fecha_creacion='".$_REQUEST['creado']."'"
            ."where id_sucursal =".$_REQUEST['id_sucursal'];
        $mensaje='Modificado Exitosamente';
        break;
    case 3:
        $sql = "delete from sucursal "
            . "where id_sucursal =".$_REQUEST['id_sucursal'];
        $mensaje='Borrado Exitosamente';
        break;
}
if(consultas::ejecutar_sql($sql)){
    $_SESSION['mensaje']=$mensaje;
    header("location:sucursal_index.php");
}else{
    $_SESSION['mensaje']='ERROR'. $sql;
    header("location:sucursal_index.php");
}
?>