<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/x-icon" href="/img/acceso.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Registrar</title>
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
                                        <h3 class="box-title">Agregar Sucursales</h3><br>
                                        <strong>ATENCIÓN!</strong> Es importante llenar los campos con <span class="badge-warning">*</span>
                                        <div class="box-tools">
                                            <a href="sucursal_index.php" class="btn btn-primary pull-right btn-sm">
                                                <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div> <!-- BOX HEADER -->
                                    <form action="sucursal_control.php" method="post" accept-charset="utf-8" class="form-horizontal">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Nombre</label><span class="badge-warning">*</span>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Loma Plata" class="form-control" name="nombre" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Dirección</label><span class="badge-warning">*</span>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Avenida Nanawa casi López Chávez" class="form-control" name="direccion" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Ciudad</label><span class="badge-warning">*</span>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Boquerón" class="form-control" name="ciudad" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Estado</label><span class="badge-warning">*</span>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Alto Paraguay" class="form-control" name="estado" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">País</label><span class="badge-warning">*</span>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="Paraguay" class="form-control" name="pais" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Código Postal</label><span class="badge-warning">*</span>
                                                <div class="col-lg-8">
                                                    <input type="number" placeholder="2525" class="form-control" name="postal" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Teléfono</label><span class="badge-warning">*</span>
                                                <div class="col-lg-8">
                                                    <input type="number" placeholder="0981234567" class="form-control" name="telefono" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Correo Electrónico</label><span class="badge-warning">*</span>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="pruebas@sucursal2.com.py" class="form-control" name="email" required autofocus>
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