<?php

/* require de viviendas */
require_once "libraries/infraestructura.php";
$inmo = catalogo_todos_viviendas();


?>

<h1 class="text-center my-5 ">Todas Nuestras Viviendas </h1>

<div class="row">

    <?php if (count($inmo)) {   ?>
        <?php foreach ($inmo as $cdp) { ?>

            <div class="col-3">
                <div class="card mb-3">
                    <img src="img/casas/<?=$cdp['imagen'] ?>" class="card-img-top" alt="<?= $cdp['tipo'] ?>">
                    <div class="card-body">
                        <p class="fs-6 m-0 fw-bold text-danger"><?= $cdp['barrio'] ?></p>
                        <h5 class="card-title"><?= $cdp['calle'] ?></h5>
                        <p class="card-text"><?= recortar_palabras($cdp['espacios'], 8) ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Orientacion: <?= $cdp['orientacion'] ?></li>
                        <li class="list-group-item"><?= $cdp['condicion'] ?></li>
                        <li class="list-group-item">tipo: <?= $cdp['tipo'] ?></li>
                    </ul>
                    <div class="card-body">
                        <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?= $cdp['venta'] ?></p>
                        <a href="index.php?sec=vivienda&id= <?= $cdp['id'] ?> " class="btn btn-warning w-100 fw-bold">VER MÁS</a>
                    </div>

                </div>
            </div>

        <?php } ?>

    <?php } else { ?>
        <div class="col-12">
            <h2 class="text-center text-danger mb-5">No se encontraron Productos</h2>
        </div>
    <?php } ?>
</div>