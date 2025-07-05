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
                                        <h3 class="box-title">Agregar Usuarios</h3><br>
                                        <!-- <strong>ATENCIÓN!</strong> Es importante llenar los campos con <span class="badge-warning">*</span> -->
                                        <div class="box-tools">
                                            <a href="usuario_index.php" class="btn btn-primary pull-right btn-sm">
                                                <i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div> <!-- BOX HEADER -->
                                    <form action="usuario_control.php" method="post" accept-charset="utf-8" class="form-horizontal">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nombres</label>
                                                <div class="col-lg-3">
                                                    <input type="text" placeholder="Camilo Joaquín" class="form-control" name="nombre" required autofocus>
                                                </div>
                                                <label class="col-lg-1 control-label">Apellidos</label>
                                                <div class="col-lg-4">
                                                    <input type="text" placeholder="Sesto Montaner" class="form-control" name="apellido" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Alias</label>
                                                <div class="col-lg-3">
                                                    <input type="text" placeholder="csesto" class="form-control" name="alias" required autofocus>
                                                </div>
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Correo Electrónico</label>
                                                <div class="col-lg-3">
                                                    <input type="text" placeholder="pruebas@usuario.com.py" class="form-control" name="email" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Contraseña</label>
                                                <div class="col-lg-3">
                                                    <input type="password" placeholder="************" class="form-control" name="password" required autofocus>
                                                </div>
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Repetir Contraseña</label>
                                                <div class="col-lg-3">
                                                    <input type="password" placeholder="************" class="form-control" name="password" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Permiso</label>
                                                <div class="col-lg-3">
                                                    <select class="form-control" name="permiso" required autofocus>
                                                        <option value="">Seleccione un permiso</option>
                                                        <option value="Superadmin">Superadmin</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Estandar">Estandar</option>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Estado</label>
                                                <div class="col-lg-3">
                                                    <select class="form-control" name="estado" required autofocus>
                                                        <option value="Superadmin">Superadmin</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Estandar" selected>Estandar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Cargo</label>
                                                <div class="col-lg-3">
                                                    <input type="text" placeholder="Gerente" class="form-control" name="cargo" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="accion" value="1">
                                                <label class="col-lg-2 control-label">Sucursal</label>
                                                <div class="col-lg-3">
                                                    <select class="form-control" name="sucursal" required autofocus>
                                                        <?php foreach ($sucursales as $sucursal): ?>
                                                        <option value="<?= $sucursal['id_sucursal'] ?>"><?= $sucursal['id_sucursal'] ?></option>
                                                            <?php endforeach; ?>
                                                    </select>
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