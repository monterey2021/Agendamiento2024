<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="/img/acceso.ico">
        <title>Borrar</title>
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
                                        <i class="ion ion-trash-b"></i>
                                        <h3 class="box-title">Borrar Sucursales</h3>
                                        <div class="box-tools">
                                            <a href="sucursal_index.php" class="btn btn-primary pull-right btn-sm">
                                                <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div> <!-- BOX HEADER -->
                                    <form action="sucursal_control.php" method="post" accept-charset="utf-8" class="form-horizontal">
                                        <div class="box-body">
                                            <?php $resultado=consultas::get_datos("select * from sucursal "
                                                    . "where id_sucursal =".$_GET['id_sucursal']);?>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">ID</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="id_sucursal" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="text" class="form-control" name="id_sucursal" value="<?php echo $resultado[0]['id_sucursal'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nombres</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="nombre" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="text" class="form-control" name="nombre" value="<?php echo $resultado[0]['nombre'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Dirección</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="direccion" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="text" class="form-control" name="direccion" value="<?php echo $resultado[0]['dirección'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Ciudad</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="ciudad" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="text" class="form-control" name="ciudad" value="<?php echo $resultado[0]['ciudad'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Estado</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="estado" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="text" class="form-control" name="estado" value="<?php echo $resultado[0]['estado'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">País</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="pais" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="text" class="form-control" name="pais" value="<?php echo $resultado[0]['país'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Código Postal</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="postal" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="numb" class="form-control" name="postal" value="<?php echo $resultado[0]['código_postal'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Teléfono</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="telefono" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="text" class="form-control" name="telefono" value="<?php echo $resultado[0]['teléfono'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Correo Electrónico</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="email" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="text" class="form-control" name="email" value="<?php echo $resultado[0]['email'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Creado</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="creado" value="<?php echo $resultado[0]['id_sucursal']?>">
                                                    <input type="text" class="form-control" name="creado" value="<?php echo $resultado[0]['fecha_creacion'];?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary pull-right">
                                                <i class="fa fa-floppy-o"></i> Borrar </button>
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