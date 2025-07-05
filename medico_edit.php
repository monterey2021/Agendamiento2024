<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="/img/acceso.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Modificar</title>
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
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <i class="ion ion-plus"></i>
                                        <h3 class="box-title">Editar Médicos</h3>
                                        <div class="box-tools">
                                            <a href="medico_index.php" class="btn btn-primary pull-right btn-sm">
                                                <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div> <!-- BOX HEADER -->
                                    <form action="medico_control.php" method="post" accept-charset="utf-8" class="form-horizontal">
                                        <div class="box-body">
                                            <?php $resultado=consultas::get_datos("select * from medicos "
                                                    . "where id_medico =".$_GET['id_medico'])?>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">ID</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="id_medico" value="<?php echo $resultado[0]['id_medico']?>">
                                                    <input type="text" class="form-control" name="id_medico" value="<?php echo $resultado[0]['id_medico'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nombres</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="nombre" value="<?php echo $resultado[0]['id_medico']?>">
                                                    <input type="text" class="form-control" name="nombre" value="<?php echo $resultado[0]['nombre'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Apellidos</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="apellido" value="<?php echo $resultado[0]['id_medico']?>">
                                                    <input type="text" class="form-control" name="apellido" value="<?php echo $resultado[0]['apellido'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Especialidad</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="especialidad" value="<?php echo $resultado[0]['id_medico']?>">
                                                    <input type="text" class="form-control" name="especialidad" value="<?php echo $resultado[0]['especialidad'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Teléfono</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="telefono" value="<?php echo $resultado[0]['id_medico']?>">
                                                    <input type="text" class="form-control" name="telefono" value="<?php echo $resultado[0]['teléfono'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Correo Electrónico</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="email" value="<?php echo $resultado[0]['id_medico']?>">
                                                    <input type="text" class="form-control" name="email" value="<?php echo $resultado[0]['email'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Creado</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="creado" value="<?php echo $resultado[0]['id_medico']?>">
                                                    <input type="text" class="form-control" name="creado" value="<?php echo $resultado[0]['fecha_creacion'];?>" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary pull-right">
                                                <i class="fa fa-floppy-o"></i> Modificar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php require 'menu/footer_lte.ctp'; ?><!--ARCHIVOS JS-->
        </div>
            <?php require 'menu/js_lte.ctp'; ?><!--ARCHIVOS JS-->
    </body>
</html>