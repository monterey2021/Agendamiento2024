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
                                        <h3 class="box-title">Editar Usuarios</h3>
                                        <div class="box-tools">
                                            <a href="usuario_index.php" class="btn btn-primary pull-right btn-sm">
                                                <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div> <!-- BOX HEADER -->
                                    <form action="usuario_control.php" method="post" accept-charset="utf-8" class="form-horizontal">
                                        <div class="box-body">
                                            <?php $resultado=consultas::get_datos("select * from usuarios "
                                                    . "where id_usuario =".$_GET['id_usuario'])?>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">ID</label>
                                                <div class="col-lg-1">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="id_usuario" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="text" class="form-control" name="id_usuario" value="<?php echo $resultado[0]['id_usuario'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nombres</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="nombre" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="text" class="form-control" name="nombre" value="<?php echo $resultado[0]['nombre'];?>" required autofocus>
                                                </div>
                                                <label class="col-lg-1 control-label">Apellidos</label>
                                                <div class="col-lg-4">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="apellido" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="text" class="form-control" name="apellido" value="<?php echo $resultado[0]['apellido'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Alias</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="alias" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="text" class="form-control" name="alias" value="<?php echo $resultado[0]['alias'];?>" required autofocus>
                                                </div>
                                                <label class="col-lg-2 control-label">Correo Electrónico</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="email" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="text" class="form-control" name="email" value="<?php echo $resultado[0]['email'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Contraseña</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="password" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="password" class="form-control" name="password" value="<?php echo $resultado[0]['contraseña'];?>" required autofocus>
                                                </div>
                                                <label class="col-lg-2 control-label">Repetir Contraseña</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="password" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="password" class="form-control" name="password" value="<?php echo $resultado[0]['contraseña'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Permiso</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="permiso" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="text" class="form-control" name="permiso" value="<?php echo $resultado[0]['permiso'];?>" required autofocus>
                                                </div>
                                                <label class="col-lg-1 control-label">Estado</label>
                                                <div class="col-lg-4">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="estado" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="text" class="form-control" name="estado" value="<?php echo $resultado[0]['estado'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Cargo</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="cargo" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="text" class="form-control" name="cargo" value="<?php echo $resultado[0]['cargo'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Sucursal</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="sucursal" value="<?php echo $resultado[0]['id_usuario']?>">
                                                    <input type="text" class="form-control" name="sucursal" value="<?php echo $resultado[0]['nombre'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Creado</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="creado" value="<?php echo $resultado[0]['id_usuario']?>">
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