<?php require ("clases/conexion.php"); ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar d-flex flex-column justify-content-between" style="height: 100vh;">
        <ul class="sidebar-menu">
            <?php
            $modulos=consultas::get_datos("select * from modulos order by id_modulo");
            foreach ($modulos as $modulo) { ?>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-list"></i><span><?php echo $modulo['nombremod']?></span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                    <?php
                    $paginas=consultas::get_datos("select * from paginas a join modulos b on a.id_modulo=b.id_modulo where nombremod='".$modulo['nombremod']."' order by nombrepag");
                    ?>
                <ul class="treeview-menu">
                    <?php foreach ($paginas as $pagina) { ?>
                    <li><a href="<?php echo $pagina['enlace']?>"><i class="fa fa-circle-o"></i> <?php echo $pagina['nombrepag']?></a></li>
                        <?php };?>
                </ul>
            </li>
                <?php } ?>
        </ul>
        <div class="d-flex align-items-center p-2 border-top">
            <img src="<?php
            if(!empty($_SESSION['foto'])){
                echo $_SESSION['foto'];
                }else{
                    echo "bootstrap-icons-1.13.1/person-circle.svg";}?>" class="rounded-circle me-2" alt="Usuario" style="width: 40px;">
            <div>
                <p class="mb-0 fw-bold text-white"><?php
                echo $_SESSION['nombre_completo'];?></p>
                <small class="text-success">En linea</small>
            </div>
        </div>
    </div>
    
</aside>