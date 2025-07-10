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