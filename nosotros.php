<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shuriken Tacna - Nosotros</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
    <a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <img src="assets/img/logo.png" alt="Logo" style="width: 140px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto align-items-center mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="nosotros.php">Nosotros</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="productos.php">Productos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="carrito.php">Carrito</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin/index.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Contenido de la página Nosotros -->
    <section class="py-5">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 text-center">
                <h1 class="fw-bolder anim-titulo">Bienvenidos a Shuriken Tacna</h1>
                <p class="lead anim-texto">Somos la primera tienda de cómics de la ciudad de Tacna.</p>
                <!-- Aquí se inserta la imagen con animación -->
                <img src="assets/img/tienda.jpg" class="anim-imagen" style="max-width: 45%;">
                <p class="anim-texto">En Shuriken Tacna, nos apasiona el mundo de los cómics y los productos del mundo asiático. Ofrecemos una amplia selección de mangas, cómics, figuras de acción y mucho más. Nuestra misión es llevar lo mejor del mundo del entretenimiento a nuestros clientes.</p>
                <p class="anim-texto">Desde nuestro inicio, nos hemos comprometido a brindar a nuestros clientes una experiencia de compra única y agradable. Nuestro equipo está formado por apasionados del mundo del cómic, por lo que siempre estamos actualizados con las últimas novedades y tendencias.</p>
                <p class="anim-texto">Te invitamos a explorar nuestro catálogo de productos y descubrir todo lo que tenemos para ofrecer. Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos. ¡Esperamos verte pronto en Shuriken Tacna!</p>
            </div>
        </div>
    </div>
</section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Derechos reservados para GRUPO 12 3ER AÑO ESIS 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    

</body>

</html>
