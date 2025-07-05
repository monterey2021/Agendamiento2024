<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="/img/acceso.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Registro de consultas</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php
           session_start();
           require 'menu/css_lte.ctp'; ?><!--ARCHIVOS CSS-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php require 'menu/header_lte.ctp'; ?><!--CABECERA PRINCIPAL-->
            <?php require 'menu/toolbar_lte.ctp';?><!--MENU PRINCIPAL-->
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <?php if(!empty($_SESSION['mensaje'])){?>
                            <div class="alert alert-danger" role="alert" id="mensaje">
                                <span class="glyphicon glyphicon-exclamation-sign"></span>
                                <?php echo $_SESSION['mensaje'];
                                $_SESSION['mensaje']='';?>
                            </div>
                            <?php } ?>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="ion ion-clipboard"></i>
                                    <h3 class="box-title">Consultas al día</h3>
                                    <div class="box-tools">
                                        <a href="registrar_consultas_add.php" class="btn btn-primary btn-am pull-right" role="button"><i class="fa fa-plus"></i></a>
                                        <a href="registrar_consultas_print.php" class="btn btn-default btn-am pull-right" role="button"><i class="fa fa-print"></i></a>
                                    </div>
                                </div>
                                <div class="box-body no-padding">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-lg-12">
                                            <?php
                                            $consultas = consultas::get_datos("select * from consultas order by id_consulta");
                                            if (!empty($consultas)) { ?>
                                            <div class="table-responsive">
                                                <table class="table col-lg-12 col-md-12 col-xs-12 table-bordered table-striped table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th>Cita</th>
                                                            <th>Agenda Médica</th>
                                                            <th>Fecha</th>
                                                            <th>Tratamiento</th>
                                                            <th>Observaciones</th>
                                                            <th class="text-center">Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($consultas as $consu) { ?>
                                                        <tr>
                                                            <td data-title="Cita"> <?php echo $consu['id_cita']; ?></td>
                                                            <td data-title="Agenda Médica"> <?php echo $consu['id_agenda']; ?></td>
                                                            <td data-title="Fecha"> <?php echo $consu['fecha']; ?></td>
                                                            <td data-title="Tratamiento"> <?php echo $consu['tratamiento']; ?></td>
                                                            <td data-title="Observaciones"> <?php echo $consu['observaciones']; ?></td>
                                                            <td data-title="Acciones" class="text-center">
                                                                <a href="registrar_consultas_edit.php?id_consulta=<?php echo $consu['id_consulta']; ?>" class="btn btn-warning btn-sm" role="button"
                                                                   data-title="Editar" rel="tooltip" data-placement="top">
                                                                    <span class="glyphicon glyphicon-edit"></span>
                                                                </a>
                                                                <a href="registrar_consultas_del.php?id_consulta=<?php echo $consu['id_consulta']; ?>" class="btn btn-danger btn-sm" role="button"
                                                                   data-title="Borrar" rel="tooltip" data-placement="top">
                                                                    <span class="glyphicon glyphicon-trash"></span>
                                                                </td>
                                                                </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                </table>
                                            </div>
                                                <?php } else { ?>
                                            <div class="alert alert-info flat">
                                                <span class="glyphicon glyphicon-info-sign"></span>
                                                No existen registros de consultas
                                            </div>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'menu/footer_lte.ctp'; ?><!--ARCHIVOS JS-->
        </div>
        <?php require 'menu/js_lte.ctp'; ?><!--ARCHIVOS JS-->
        <script>
            $("#mensaje").delay(4000).slideUp(200,function() {
                $(this).alert('close');
            });
        </script>
    </body>
</html>