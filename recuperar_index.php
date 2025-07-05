<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Recuperar Contraseña</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .acceso-usuario {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        #sha {
            background-color: white;
            max-width: 340px;
            box-shadow: 0px 0px 18px 0px rgba(48,50,50,0.48);
            border-radius: 6%;
        }
        #logo-acceso {
            margin: 0px auto 10px;
            display: block;
            border-radius: 50%;
        }
        .acceso-usuario {
            font-family: 'Lucida Sans Unicode';
        }
        /*.recuperar {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh;
        }
        .form-group {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-control {
            padding-left: 10px;
        }
        .form-control-feedback {
            position: absolute;
            left: 10px;
        }*/
    </style>
</head>
<body>
    <div class="container well" id="sha">
        <form action="recuperar_contrasena.php" method="post">
            <div class="form-group has-feedback">
                <label class="checkbox">Ingresa tu correo electrónico</label>
                <input type="email" class="form-control" name="email" required placeholder="Correo electrónico"/>
                <!--<span class="fa fa-envelope form-control-email"></span>-->
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Recuperar Contraseña</button>
        </form>
    </div>
</body>
</html>
