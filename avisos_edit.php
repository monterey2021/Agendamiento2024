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
                                        <h3 class="box-title">Editar Avisos / Recordatorios</h3>
                                        <div class="box-tools">
                                            <a href="avisos_index.php" class="btn btn-primary pull-right btn-sm">
                                                <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div> <!-- BOX HEADER -->
                                    <form action="avisos_control.php" method="post" accept-charset="utf-8" class="form-horizontal">
                                        <div class="box-body">
                                            <?php $resultado=consultas::get_datos("select * from recordatorios "
                                                    . "where id_recordatorio =".$_GET['id_recordatorio'])?>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">ID</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="id_recordatorio" value="<?php echo $resultado[0]['id_recordatorio']?>">
                                                    <input type="text" class="form-control" name="id_recordatorio" value="<?php echo $resultado[0]['id_recordatorio'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Mensaje</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="mensaje" value="<?php echo $resultado[0]['id_recordatorio']?>">
                                                    <input type="text" class="form-control" name="mensaje" value="<?php echo $resultado[0]['mensaje'];?>" required autofocus>
                                                </div>
                                                <label class="col-lg-2 control-label">Cita relacionada</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="id_cita" value="<?php echo $resultado[0]['id_recordatorio']?>">
                                                    <select class="form-control" name="id_cita" required autofocus>
                                                        <option value=""><?php echo $resultado[0]['id_cita'];?></option>
                                                        <?php foreach ($citas as $cit): ?>
                                                        <option value="<?= htmlspecialchars($cit['id_cita'], ENT_QUOTES, 'UTF-8') ?>">
                                                                <?= htmlspecialchars($cit['id_cita'], ENT_QUOTES, 'UTF-8') ?>
                                                        </option>
                                                            <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Fecha</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="fecha" value="<?php echo $resultado[0]['id_recordatorio']?>">
                                                    <input type="date" class="form-control" name="fecha" value="<?php echo $resultado[0]['fecha'];?>" required autofocus>
                                                </div>
                                                <label class="col-lg-2 control-label">Hora</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="hora" value="<?php echo $resultado[0]['id_recordatorio']?>">
                                                    <input type="time" class="form-control" name="hora" value="<?php echo $resultado[0]['hora'];?>" required autofocus>
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