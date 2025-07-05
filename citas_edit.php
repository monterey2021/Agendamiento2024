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
                                        <h3 class="box-title">Editar Cita</h3>
                                        <div class="box-tools">
                                            <a href="citas_index.php" class="btn btn-primary pull-right btn-sm">
                                                <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div> <!-- BOX HEADER -->
                                    <form action="citas_control.php" method="post" accept-charset="utf-8" class="form-horizontal">
                                        <div class="box-body">
                                            <?php $resultado=consultas::get_datos("select * from citas "
                                                    . "where id_cita =".$_GET['id_cita'])?>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">ID</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="id_cita" value="<?php echo $resultado[0]['id_cita']?>">
                                                    <input type="text" class="form-control" name="id_cita" value="<?php echo $resultado[0]['id_cita'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Fecha y Hora de la Cita</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="fecha" value="<?php echo $resultado[0]['id_cita']?>">
                                                    <input type="date" class="form-control" name="fecha" value="<?php echo $resultado[0]['fecha'];?>" required autofocus>
                                                    <input type="hidden" name="hora" value="<?php echo $resultado[0]['id_cita']?>">
                                                    <input type="time" class="form-control" name="hora" value="<?php echo $resultado[0]['hora'];?>" required autofocus>
                                                </div>
                                                <label class="col-lg-2 control-label">Sucursal</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="nombresuc" value="<?php echo $resultado[0]['id_cita']?>">
                                                    <select class="form-control" name="nombresuc" required autofocus>
                                                        <option value=""><?php echo $resultado[0]['nombre_sucursal'];?></option>
                                                            <?php foreach ($sucursal as $suc): ?>
                                                        <option value="<?= htmlspecialchars($suc['nombre'], ENT_QUOTES, 'UTF-8') ?>">
                                                                    <?= htmlspecialchars($suc['nombre'], ENT_QUOTES, 'UTF-8') ?>
                                                        </option>
                                                            <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Descripción</label>
                                                <div class="col-lg-8">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="descripcion" value="<?php echo $resultado[0]['id_cita']?>">
                                                    <input type="description" class="form-control" name="descripcion" value="<?php echo $resultado[0]['motivo'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Paciente</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="nombrepaci" value="<?php echo $resultado[0]['id_cita']?>">
                                                    <input class="form-control" name="nombrepaci" value="<?php echo $resultado[0]['nombre_paciente'];?>" required autofocus>
                                                </div>
                                                <label class="col-lg-2 control-label">Médico</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="nombremedi" value="<?php echo $resultado[0]['id_cita']?>">
                                                    <input class="form-control" name="nombremedi" value="<?php echo $resultado[0]['nombre_medico'];?>" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Estado</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="estado" value="<?php echo $resultado[0]['id_cita']?>">
                                                    <select class="form-control" name="estado" required autofocus>
                                                        <option value=""><?php echo $resultado[0]['estado'];?></option>
                                                        <option value="Confirmada">Confirmada</option>
                                                        <option value="Anulada">Anulada</option>
                                                    </select>
                                                </div>
                                                <label class="col-lg-2 control-label">Seleccione la agenda</label>
                                                <div class="col-lg-3">
                                                <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="id_agenda" value="<?php echo $resultado[0]['id_cita']?>">
                                                    <select class="form-control" name="id_agenda" required autofocus>
                                                        <option value=""><?php echo $resultado[0]['id_agenda'];?></option>
                                                            <?php foreach ($agenda_medica as $agenda): ?>
                                                        <option value="<?= htmlspecialchars($agenda['id_agenda'], ENT_QUOTES, 'UTF-8') ?>">
                                                                    <?= htmlspecialchars($agenda['id_agenda'], ENT_QUOTES, 'UTF-8') ?>
                                                        </option>
                                                            <?php endforeach; ?>
                                                    </select>
                                            </div>
                                               </div> 
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Creado</label>
                                                <div class="col-lg-3">
                                                    <input type="hidden" name="accion" value="2">
                                                    <input type="hidden" name="creado" value="<?php echo $resultado[0]['id_cita']?>">
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