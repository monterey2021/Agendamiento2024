<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/acceso.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Registrar Agenda Médica</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <?php
     session_start();
     require 'menu/css_lte.ctp'; ?>
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
                                        <h3 class="box-title">Registrar Agenda Médica</h3><br>
                                        <!-- <strong>ATENCIÓN!</strong> Es importante llenar los campos con <span class="badge-warning">*</span> -->
                                        <div class="box-tools">
                                            <a href="registrar_agenda_index.php" class="btn btn-primary pull-right btn-sm">
                                                <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div>
                                    <form action="registrar_agenda_control.php" method="post" accept-charset="utf-8" class="form-horizontal">
                                        <div class="box-body">
                                            <div class="form-group">
                                            <input type="hidden" name="accion" value="1">
                                            <label class="col-lg-2 control-label">Paciente</label>
                                                <div class="col-lg-3">
                                                    <select class="form-control" name="nombrepaci" required autofocus>
                                                        <option value="">Seleccione una opción</option>
                                                            <?php foreach ($pacientes as $paci): ?>
                                                        <option value="<?= htmlspecialchars($paci['nombre'], ENT_QUOTES, 'UTF-8') ?>">
                                                                    <?= htmlspecialchars($paci['nombre'], ENT_QUOTES, 'UTF-8') ?>
                                                        </option>
                                                            <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            <input type="hidden" name="accion" value="1">
                                            <label class="col-lg-2 control-label">Médico</label>
                                                <div class="col-lg-3">
                                                    <select class="form-control" name="nombremedi" required autofocus>
                                                        <option value="">Seleccione una opción</option>
                                                        <?php foreach ($medicos as $medi): ?>
                                                        <option value="<?= htmlspecialchars($medi['nombre'], ENT_QUOTES, 'UTF-8') ?>">
                                                                <?= htmlspecialchars($medi['nombre'], ENT_QUOTES, 'UTF-8') ?>
                                                        </option>
                                                            <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <input type="hidden" name="accion" value="1">
                                            <label class="col-lg-2 control-label">Fecha</label>
                                                <div class="col-lg-3">
                                                    <input type="date" class="form-control" name="fecha" required autofocus>
                                                </div>
                                            <input type="hidden" name="accion" value="1">
                                            <label class="col-lg-2 control-label">Hora</label>
                                                <div class="col-lg-3">
                                                    <input type="time" class="form-control" name="hora" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <input type="hidden" name="accion" value="1">
                                            <label class="col-lg-2 control-label">Descripción</label>
                                                <div class="col-lg-8">
                                                    <textarea type="description" placeholder="El paciente presenta un cuadro gripal..." class="form-control" name="descripcion" required autofocus></textarea>
                                                </div>
                                            </div>
                                    </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary pull-right">Registrar</button>
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