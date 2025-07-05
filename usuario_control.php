<?php
require './clases/conexion.php';
session_start();
switch ($_REQUEST ['accion']) {
    case 1:
        $sql = "insert into usuarios (id_usuario, nombre, apellido, email, contraseña, permiso, estado, cargo, fecha_creacion, id_sucursal, alias) "
            . "values ((select coalesce(max(id_usuario), 0) + 1 from usuarios), '" . $_REQUEST['nombre'] . "', '" . $_REQUEST['apellido'] . "', '" . $_REQUEST['email'] . "', '" . $_REQUEST['password'] . "', '" . $_REQUEST['permiso'] . "', '" . $_REQUEST['estado'] . "', '" . $_REQUEST['cargo'] . "',NOW(), '" . $_REQUEST['sucursal'] . "', '" . $_REQUEST['alias'] . "')";
        $mensaje = 'Registrado Exitosamente';
        break;
    case 2:
        $sql = "update usuarios set id_usuario='".$_REQUEST['id_usuario']."',nombre='".$_REQUEST['nombre']."',apellido='".$_REQUEST['apellido']."',email='".$_REQUEST['email']."',contraseña='".$_REQUEST['password']."',permiso='".$_REQUEST['permiso']."',estado='".$_REQUEST['estado']."',cargo='".$_REQUEST['cargo']."',fecha_creacion='".$_REQUEST['creado']."',id_sucursal='".$_REQUEST['sucursal']."',alias='".$_REQUEST['alias']."'"
            ."where id_usuario =".$_REQUEST['id_usuario'];
        $mensaje='Modificado Exitosamente';
        break;
    case 3:
        $sql = "delete from usuarios "
            . "where id_usuario =".$_REQUEST['id_usuario'];
        $mensaje='Borrado Exitosamente';
        break;
}
if(consultas::ejecutar_sql($sql)){
    $_SESSION['mensaje']=$mensaje;
    header("location:usuario_index.php");
}else{
    $_SESSION['mensaje']='ERROR'. $sql;
    header("location:usuario_index.php");
}
?>