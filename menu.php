<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Menú Principal</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <?php 
        session_start();
        require 'menu/css_lte.ctp';
        ?>
    </head>
    <body class="sidebar-mini layout-fixed">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <a href="/Agendamiento2024/menu.php" class="navbar-brand d-flex align-items-center">
                    <img src="img/Hospital.png" alt="Logo" class="brand-image me-2" style="height: 30px;">
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php if(!empty($_SESSION['foto'])){ echo $_SESSION['foto'];}else{ echo "img/no_disponible.jpg";}?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $_SESSION['alias'];?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="<?php if(!empty($_SESSION['foto'])){ echo $_SESSION['foto'];}else{ echo "img/no_disponible.jpg";}?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $_SESSION['nombre_completo'];?>
                                            <small>Cargo: <?php if(!empty($_SESSION['cargo'])){ echo $_SESSION['cargo'];}else{ echo "No especificado";}?></small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="/Agendamiento2024/perfil.php" class="btn btn-default">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/Agendamiento2024" class="btn btn-default">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </nav>
            <?php require ("clases/conexion.php"); ?>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar d-flex flex-column justify-content-between" style="height: 100vh;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
  <?php
  $modulos = consultas::get_datos("SELECT * FROM modulos ORDER BY id_modulo");
  foreach ($modulos as $modulo) {
    $paginas = consultas::get_datos("
      SELECT * FROM paginas a 
      JOIN modulos b ON a.id_modulo = b.id_modulo 
      WHERE nombremod = '" . $modulo['nombremod'] . "' 
      ORDER BY nombrepag
    ");
    $hasSubmenu = count($paginas) > 0;
  ?>
    <li class="nav-item <?= $hasSubmenu ? 'menu-open' : '' ?>">
      <a href="#" class="nav-link">
        <i class="nav-icon bi bi-list"></i>
        <p>
          <?= $modulo['nombremod'] ?>
          <?php if ($hasSubmenu) { ?>
            <i class="nav-arrow bi bi-chevron-right"></i>
          <?php } ?>
        </p>
      </a>

      <?php if ($hasSubmenu) { ?>
        <ul class="nav nav-treeview show">
          <?php foreach ($paginas as $pagina) { ?>
            <li class="nav-item">
              <a href="<?= $pagina['enlace'] ?>" class="nav-link">
                <i class="bi bi-circle nav-icon"></i>
                <p><?= $pagina['nombrepag'] ?></p>
              </a>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
    </li>
  <?php } ?>
</ul>
        <div class="d-flex align-items-center p-2 border-top">
            <img src="<?php
            if(!empty($_SESSION['foto'])){
                echo $_SESSION['foto'];
                }else{
                    echo "img/sin-perfil.svg";}?>" class="rounded-circle me-3" alt="Usuario" style="width: 40px;">
            <div>
                <p class="mb-0 fw-bold text-white"><?php
                echo $_SESSION['nombre_completo'];?></p>
                <small class="text-success">En linea</small>
            </div>
        </div>
    </div>
</aside>
            <div class="content-wrapper">
            </div>
            
        </div>
        <?php require 'menu/js_lte.ctp';?>
    </body>
</html>


