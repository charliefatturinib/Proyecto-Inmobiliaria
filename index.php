<?php


require_once "libraries/funciones.php";

// incluir lasa clases



$sectores_validas = [
  "home" => [
    "titulo" => "Bievenidos"
  ],
  "tipos" => [
    "titulo" => "Nuestro Catalogo"
  ],
  "todos" => [
    "titulo" => "Todas las Viviendas"
  ],
  "vivienda" => [
    "titulo" => "Detalles"
  ],
  "sobre_nosotros" => [
    "titulo" => "Sobre Nosotros"
  ],
  "contacto" => [
    "titulo" => "Contacto"
  ],
  "alumno" => [
    "titulo" => "Datos"
  ],
  "mas_nuevos" => [
    "titulo" => "Lo mas Nuevo"
  ],


];

$individual = $_GET['sec'] ?? "home";


/* Buscar si existe el indice del array */

if (!array_key_exists($individual, $sectores_validas)) {
  $vista = "404";
  $titulo = "404- Pagina no encontrada";
} else {
  $vista = $individual;
  $titulo = $sectores_validas[$individual]['titulo'];
}


?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ASB Inmobiliaria<?= $titulo  ?></title>
  <!-- BOOTSTRAP  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="estilos.css">

  <!-- CDNJS -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" class="">

  <!-- GOOGLE FONTS -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">

  <!-- FAVICON -->

  <link rel="icon" href="img/logo/logo.png" type="image/png">


</head>

<body class="bg-danger-subtle">






  <!-- MENU -->


  <nav class="navbar navbar-expand-lg bg-secondary mx-auto" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img width="70" height="50" class="m-1" src="img/logo/logo.png" alt=""></a>
      <p class="fw-bold fs-5 text mt-3 text-light">ASB Inmobiliaria</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="index.php?sec=home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tipos de Propiedad
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?sec=tipos&ind=casa">Casas</a></li>
              <li><a class="dropdown-item" href="index.php?sec=tipos&ind=departamento">Departamentos</a></li>
              <li><a class="dropdown-item" href="index.php?sec=tipos&ind=ph">PH</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?sec=mas_nuevos">Mas Nuevos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?sec=mas_antiguos">Mas Antiguos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?sec=sobre_nosotros">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?sec=contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?sec=alumno">Alumno</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>






  <main class="container">
    <?php
    require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
    ?>
  </main>




  <footer class="bg-warning mb-2">
    <div class="footer-content">
      <p class="text-light text-center p-4">Todos los derechos reservados - 2024 - CFP20</p>

      <sections class="socials">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </sections>
    </div>


  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>