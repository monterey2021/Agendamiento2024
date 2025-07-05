<?php

require './clases/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Consulta para verificar si el correo existe
    $sql = "SELECT id_usuario, alias, email FROM usuarios WHERE email = '".$email."'";
    $resultado = consultas::get_datos($sql);

    if (!empty($resultado)) {
        // Generar un token único
        $token = bin2hex(random_bytes(50));

        // Guardar el token en la base de datos con tiempo de expiración
        $update_sql = "UPDATE usuarios SET reset_token = '".$token."', token_expira = NOW() + INTERVAL 1 HOUR WHERE email = '".$email."'";
        consultas::ejecutar($update_sql);

        // Enviar correo con el enlace de recuperación
        $enlace = "http://localhost/cambiar_contrasena.php?token=".$token;
        $asunto = "Recuperación de contraseña";
        $mensaje = "Hola, haz clic en el siguiente enlace para cambiar tu contraseña: ".$enlace;
        $headers = "From: no-reply@localhost.com";

        if (mail($email, $asunto, $mensaje, $headers)) {
            echo "Hemos enviado un enlace a tu correo.";
        } else {
            echo "Error al enviar el correo.";
        }
    } else {
        echo "El correo electrónico no está registrado.";
    }
}
