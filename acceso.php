<?php

require './clases/conexion.php';

$sql = "select * from v_usuarios where alias = '".$_REQUEST['usuario']."' and password = '".$_REQUEST['contraseña']."'";

$resultado = consultas::get_datos($sql);
session_start();

if ($resultado[0]['id_usuario'] == null) {
    $_SESSION['error'] = 'Usuario o contraseña incorrectos';
    header('location:index.php');
}else{
    $_SESSION['id_usuario'] = $resultado[0]['id_usuario'];
    $_SESSION['alias'] = $resultado[0]['alias'];
    $_SESSION['foto'] = '';
    $_SESSION['nombre_completo'] = $resultado[0]['nombre_completo'];
    $_SESSION['cargo'] = $resultado[0]['cargo'];
    $_SESSION['sucursal'] = $resultado[0]['sucursal'];
    header ('location:menu.php');
}