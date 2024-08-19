<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="home.css" rel="stylesheet">
  </head>
  <body class="bg">
    
    <!-- Esta es la barra de navegacion -->
    <header class="site-header sticky-top py-1">
        <nav class="navbar navbar-expand-md navbar-dark d-flex fixed-top flex-md-row  bg-dark flex-column">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Virtual XP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contacto.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary active" href="logout_be.php">Cerrar sesión</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>

<!-- La cabecera -->
<main>
  <div class="text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5" style="width: 1000px;">
      <h3>Información de Contacto:</h3>
      <p class="lead fw-normal">Nuestra empresa nació en el año 2024, en un periodo en que las comunicaciones y la tecnologia se encuentra en auge, contamos con el compromiso y la disposición para resolver sus problemas cotidianos. Estamos ubicados en el centro de Santiago de Chile.</p>
      <h3>Servicio al cliente:</h3>
      <p class="lead fw-normal">(+56246252)</p>
  </div>

  

</main>

    <footer class="d-flex flex-wrap justify-content-between align-items-center px-4 py-4 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">Virtual XP 2024 Ⓡ</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="inicio.php" class="nav-link px-2 text-muted">Inicio</a></li>
            <li class="nav-item"><a href="productos.php" class="nav-link px-2 text-muted">Productos</a></li>
            <li class="nav-item"><a href="contacto.php" class="nav-link px-2 text-muted">Contacto</a></li>
        </ul>
    </footer>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
