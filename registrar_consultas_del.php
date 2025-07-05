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
                                        <h3 class="box-title">Borrar Consultas</h3>
                                        <div class="box-tools">
                                            <a href="registrar_consultas_index.php" class="btn btn-primary pull-right btn-sm">
                                                <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div> <!-- BOX HEADER -->
                                    <form action="registrar_consultas_control.php" method="post" accept-charset="utf-8" class="form-horizontal">
                                        <div class="box-body">
                                            <?php $resultado=consultas::get_datos("select * from consultas "
                                                    . "where id_consulta =".$_GET['id_consulta']);?>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">ID</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="id_consulta" value="<?php echo $resultado[0]['id_consulta']?>">
                                                    <input type="text" class="form-control" name="id_consulta" value="<?php echo $resultado[0]['id_consulta'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Cita relacionada</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="id_cita" value="<?php echo $resultado[0]['id_consulta']?>">
                                                    <input type="text" class="form-control" name="id_cita" value="<?php echo $resultado[0]['id_cita'];?>" disabled>
                                                </div>
                                                <label class="col-lg-2 control-label">Agenda Médica</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="id_agenda" value="<?php echo $resultado[0]['id_consulta']?>">
                                                    <input type="text" class="form-control" name="id_agenda" value="<?php echo $resultado[0]['id_agenda'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Fecha</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="fecha" value="<?php echo $resultado[0]['id_consulta']?>">
                                                    <input type="text" class="form-control" name="fecha" value="<?php echo $resultado[0]['fecha'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Tratamiento</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="tratamiento" value="<?php echo $resultado[0]['id_consulta']?>">
                                                    <input type="description" class="form-control" name="tratamiento" value="<?php echo $resultado[0]['tratamiento'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Observaciones</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="observaciones" value="<?php echo $resultado[0]['id_consulta']?>">
                                                    <input type="text" class="form-control" name="observaciones" value="<?php echo $resultado[0]['observaciones'];?>" disabled>
                                                </div>
                                                </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Creado</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="3">
                                                    <input type="hidden" name="creado" value="<?php echo $resultado[0]['id_consulta']?>">
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