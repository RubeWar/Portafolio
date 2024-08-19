<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
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
                    <a class="nav-link active" href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
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
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Nuestros productos Virtuales</h1>
      <p class="lead fw-normal">Conozca nuestros diversos productos y servicios:</p>
    </div>
  </div>
  
  <!-- Las cartas de productos -->
  <div class="container">
    <div class="row px-2 py-2">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Cámaras de seguridad IP</h5>
            <p class="card-text"> Contamos con servicios de cámaras de seguridad, para poder asistir con vigilancia a atender sus necesidades.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Servicios de dómotica</h5>
            <p class="card-text">Ofrecemos servicios de dómotica para automatizar procesos en la tranquilidad de su hogar.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Almacenamiento en la Nube</h5>
            <p class="card-text">Trabajamos con almacenamiento de contenidos e información para mayor seguridad de sus datos.</p>
          </div>
        </div>
      </div>
    </div>
	<div class="row px-2 py-2">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Productos Wereables</h5>
            <p class="card-text">Trabajamos con wereables, en donde trabajamos con tecnologias inteligentes.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Smart TV</h5>
            <p class="card-text">Trabajamos con dispositivos inteligentes que permiten la transmisión de señales inalámbricas para automatizar dispositivos manuales.</p>
          </div>
        </div>
      </div>
      
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

    <footer class="d-flex flex-wrap justify-content-between align-items-center px-4 py-4 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">Virtual XP 2024 Ⓡ.</p>
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
