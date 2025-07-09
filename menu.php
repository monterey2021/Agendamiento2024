<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Menú Principal</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <?php 
        session_start();
        require 'menu/css_lte.ctp';
        ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php require 'menu/header_lte.ctp';?>
            <?php require 'menu/toolbar_lte.ctp';?>
            <div class="content-wrapper">
            </div>
            <?php require 'menu/footer_lte.ctp';?>
        </div>
        <?php require 'menu/js_lte.ctp'; ?>
    </body>
</html>


