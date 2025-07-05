<?php

require './clases/conexion.php';

if (isset($_GET['token'])) {
    $token = pg_escape_string($_GET['token']); // Escapar el token recibido en la URL

    // Verificar si el token es válido y no ha expirado
    $sql = "SELECT id_usuario FROM usuarios WHERE reset_token = '$token' AND token_expira > NOW()";
    $resultado = consultas::get_datos($sql);

    if (!empty($resultado)) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Escapar y encriptar la nueva contraseña
            $nueva_password = pg_escape_string(password_hash($_POST['password'], PASSWORD_DEFAULT));

            // Actualizar la contraseña y limpiar el token
            $update_sql = "UPDATE usuarios 
                           SET password = '$nueva_password', 
                               reset_token = NULL, 
                               token_expira = NULL 
                           WHERE id_usuario = ".$resultado[0]['id_usuario'];
            consultas::ejecutar($update_sql);

            echo "Contraseña actualizada con éxito.";
            header('location:index.php');
        }
    } else {
        echo "El enlace ha expirado o no es válido.";
    }
} else {
    echo "Token no proporcionado.";
}

?>
<div class="container well" id="sha">
    <form method="post">
        <div class="form-group has-feedback">
            <label for="password">Nueva contraseña:</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Restablecer contraseña</button>
    </form>
</div>