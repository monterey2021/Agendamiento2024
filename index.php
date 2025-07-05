<?php
session_start();
if ($_SESSION){
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <title>Iniciar Sesión</title>
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap-icons-1.13.1/bootstrap-icons.css">
        <link rel="stylesheet" href="css/estiloacceso.css">
    </head>
    <body>
        <div class="container well" id="sha">
            <div class="row">
                <img src="img/logosecundario.png" alt="logo-acceso" class="img-responsive" id="logo-acceso"/>
            </div>
            <form class="acceso-usuario" action="acceso.php" method="post">
                <div class="position-relative mb-2">
                    <input type="text" class="form-control custom-text" name="usuario" placeholder="Usuario"/>
                    <span class="bi bi-person position-absolute top-50 end-0 translate-middle-y me-3 custom-icon"></span>
                </div>
                <div class="position-relative mb-2">
                    <input type="password" class="form-control custom-text" name="contraseña" placeholder="Contraseña"/>
                    <span class="bi bi-lock position-absolute top-50 end-0 translate-middle-y me-3 custom-icon"></span>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-2">
                    <button class="btn btn-outline-primary custom-outline" type="submit">Acceder</button>
                </div>
                <div class="checkbox" style="text-align: center;">
                    <!-- <label class="checkbox">
                        <input type="checkbox" value="1" name="recordarsesion"/>Recordar mi sesion
                    </label> -->
                    <p class="help-block"><a href="/Agendamiento2024/recuperar_index.php">¿Olvidaste tu contraseña?</a></p>
                </div>
                <?php
                if (!empty($_SESSION['error'])){?>
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign"></span>
                    <?php echo $_SESSION['error']; ?>
                    </div>
                <?php }?>
            </form>
        </div>
        <script src="js/jquery-1.12.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
