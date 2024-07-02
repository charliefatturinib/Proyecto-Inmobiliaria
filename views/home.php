<?php

require_once "libraries/infraestructura.php";

$inmo = producto_destacado();

?>



<!-- BANNER -->

<div id="carouselExampleRide" class="carousel slide mx-auto" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner/banner5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/banner/banner6.jpg" class="d-block w-100 h-90" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/banner/banner7.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<hr>


<!-- CARD PRINCIPAL -->

<div class="card  mt-5 mx-auto">
    <img src="img/card principal/Trucos-para-decorar-habitaciones-840x450 (1).jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h5 class="card-title text-center fs-2 text-danger fw-bold">CONOCÉ ASB</h5>
        <p class=" text-center mt-5 fs-2 fw-semibold ">ASB comienza su historia con nuestro fundador Jorge Jooris en 1957. Recién llegado desde MENDOZA, con un puñado de costumbres y tradiciones familiares al barrio de Belgrano ubicado en la Ciudad Autónoma de Buenos Aires. Un hombre apasionado por su profesión que supo conectar a cientos de personas con los que terminarían siendo sus nuevos hogares. Una pasión que transmitió a la siguiente y actual generación.
            Belgrano y Palermo son las sedes dónde tenemos nuestras 3 casas, nuestros hogares, cómo nos gusta llamarles.</p>

    </div>
</div>





<h2 class="text-warning bg-secondary text-center ">BUSQUEDA</h2>

<!-- CARD 1 -->
<div class="container">
    <div class="row">

        <div class="col-4">
            <div class="card" style="overflow: hidden;">
                <img src="img/casas/casa card 1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casas</h5>
                    <p class="card-text">Nuestras casas son edificios para habitar en un ambiente... </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Vos Elegis</li>
                    <li class="list-group-item">Casas Modernas</li>
                    <li class="list-group-item">Casas Antiguas</li>
                </ul>
                <div class="card-body text-center">
                    <a href="index.php?sec=tipos&ind=casa" class="card-link btn btn-warning fw-bold">ENTRAR</a>
                </div>
            </div>
        </div>



        <!-- CARD 2 -->

        <div class="col-4">
            <div class="card" style="overflow: hidden;">
                <img src="img/casas/card departamento.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Departamentos</h5>
                    <p class="card-text">Nuestras unidades de viviendas que comprenden una o más... </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Vos Elegis</li>
                    <li class="list-group-item">Dep Moderno</li>
                    <li class="list-group-item">Dep Antiguo</li>
                </ul>
                <div class="card-body text-center">
                    <a href="index.php?sec=tipos&ind=departamento" class="card-link text-center btn btn-warning fw-bold">ENTRAR</a>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->


        <div class="col-4">
            <div class="card" style="overflow: hidden;">
                <img src="img/casas/card ph.jpg" class="card-img-top" alt="...">
                <div class="card-body overflow: hidden;">
                    <h5 class="card-title">PH</h5>
                    <p class="card-text">Los llamados PH, viviendas que tienen un diseño que reúne... </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Vos Elegis</li>
                    <li class="list-group-item">Modernas</li>
                    <li class="list-group-item">Antiguas</li>
                </ul>
                <div class="card-body text-center">
                    <a href="index.php?sec=tipos&ind=ph" class="card-link btn btn-warning fw-bold">ENTRAR</a>
                </div>
            </div>

        </div>

    </div>

</div>




<!-- DESTACADOS -->

<h2 class="text-warning bg-secondary text-center mt-4">DESTACADOS</h2>


<div class="row">

    <?php foreach ($inmo as $cdp) { ?>

        <div class="col-3">
            <div class="card mb-3 m-3">
                <img src="img/casas/<?= $cdp['imagen'] ?>" class="card-img-top" alt="<?= $cdp['tipo'] ?>" style="max-height: 350px; overflow: hidden;"> <!-- nuevo -->
                <div class="card-body" style="height:125px; overflow: hidden;"> <!-- nuevo -->
                    <p class="fs-6 m-0 fw-bold text-danger"><?= $cdp['barrio'] ?></p>
                    <h5 class="card-title"><?= $cdp['calle'] ?></h5>
                    <p class="card-text"><?= recortar_palabras($cdp['espacios'], 6) ?></p>
                </div>
                <ul class="list-group list-group-flush" style="height:150px; overflow: hidden;">
                    <li class="list-group-item">Orientacion: <?= $cdp['orientacion'] ?></li>
                    <li class="list-group-item"><?= $cdp['condicion'] ?></li>
                    <li class="list-group-item">Tipo: <?= $cdp['tipo'] ?></li>
                </ul>
                <div class="card-body">
                    <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?= $cdp['venta'] ?></p>
                    <a href="index.php?sec=vivienda&id=<?= $cdp['id'] ?>" class="btn btn-warning w-100 fw-bold">VER MÁS</a>
                </div>

            </div>
        </div>

    <?php } ?>


</div>


<h2 class="text-warning bg-secondary text-center mt-4">NOVEDADES INMOBILIARIA</h2>

<div class="row g-0 bg-body-secondary position-relative">
    <div class="col-md-6 mb-md-0 p-md-4">
        <img src="img/dedepart.jpeg" class="w-90" alt="...">
    </div>
    <div class="col-md-6 p-4 ps-md-0">
        <h5 class="mt-0">Novedades Actualizadas</h5>
        <p>Algunas personas buscan una casa, nosotros les entregamos un hogar.
            Somos la llave al hogar que buscas y
            no queremos venderte casas, queremos encontrar tu hogar y ayudarte lo mejor posible con los mejores profesionales en nuestra empresa inmobiliaria</p>

    </div>
</div>


<div class="container mt-3">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="img/casas/novedades1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text fw-bold">NOVEDAD 1</p>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <img src="img/casas/novedades2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text fw-bold">NOVEDAD 2</p>
                </div>
            </div>
        </div>


        <div class="col-4">
            <div class="card">
                <img src="img/casas/novedades3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text fw-bold">NOVEDAD 3</p>
                </div>
            </div>
        </div>

    </div>
</div>














<h2 class="text-warning bg-secondary text-center mt-4">TODAS NUESTRAS VIVIENDAS</h2>
<div class="mt-3 mb-5">
    <a href="index.php?sec=todos">
        <img width="400" class="d-block mx-auto mt-5" src="img/fotoabc.jpg" alt="tpd">
    </a>
</div>