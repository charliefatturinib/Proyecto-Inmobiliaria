<?php

/* require de productos */
require_once "libraries/infraestructura.php";



/*  $serieSeleccionada = isset($_GET['ser'])  ? $_GET['ser']  : FALSE; */

$inmoSeleccionada = $_GET['ind'] ?? FALSE;
$inmo = catalogo_x_propiedad($inmoSeleccionada);



//COMENTARIOS:

//el if es "peligroso"
/*   $serie = $productos['mujer_maravilla'];

 echo "<pre>";
   print_r($serie);
 echo "</pre>"; */

$miTituloAsb = $inmoSeleccionada ? ucwords(str_replace("_", " ", $inmoSeleccionada)) : FALSE;

//COMENTARIOS:

/*  echo "La funcion Count , va contar los elementos: " . count($series)  . " Productos"; */

?>

<h1 class="text-center my-5 ">Propiedades: <?= $miTituloAsb ?> </h1>

<div class="row">

    <?php if (count($inmo)) {   ?>
        <?php foreach ($inmo as $cdp) { ?>

            <div class="col-3">
                <div class="card mb-3">
                    <img src="img/casas/<?= $cdp['imagen'] ?>" class="card-img-top" alt="<?= $cdp['tipo'] ?>">
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
                        <a href="index.php?sec=vivienda&id=<?= $cdp['id'] ?> " class="btn btn-warning w-100 fw-bold">VER MÁS</a>
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