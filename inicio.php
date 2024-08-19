<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
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
                    <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Productos</a>
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

        <?php

        include 'conexion_be.php';
        session_start();

        $sesion = $_SESSION['cliente'];

        $datos = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre = '$sesion' ");

        while($consulta = mysqli_fetch_array($datos)){
            $rol = $consulta['rol_usuario'];
        }

        if($rol == "admin"){
            include("admin.php");
        }elseif($rol == "trabajador"){
            include("trabajador.php");
        }elseif($rol == "usuario"){
            include("usuario.php");
        }

        ?>

        <h1 class="display-4 fw-normal">La seguridad y la domótica mas cerca de tu hogar.</h1>
        <p class="lead fw-normal">Somos un equipo que atiende a necesidades tecnológicas dedicada a domótica, seguridad y artículos wearables. Nuestra visión es la búsqueda de soluciones para facilitar la vida de los clientes, también otorgar herramientas para la sincronizar las actividades y la seguridad de quienes confían en nuestros servicios. Apuntamos a una modernización acorde a las herramientas y tecnologías que hoy son necesarias.</p>
        </div>
    </div>
    
    <!-- Las cartas de productos -->
    <div class="container">
        <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <img src="images/s-1.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Cámara de seguridad</h5>
                <p class="card-text">Con el objetivo de poder ser más eficientes en este campo, buscamos que la seguridad y la vigilancia promuevan satisfacción a nuestros clientes.</p>
            </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <img src="images/s-2.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Smart TV</h5>
                <p class="card-text">  Nuestra empresa  trabaja con dispositivos que transmiten señales a televisores inteligentes, mediante conexión inalámbrica.</p>
            </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <img src="images/s-3.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Dispositivos Wearables</h5>
                <p class="card-text">Nuestra empresa, trabaja con dispositivos wearables, los cuales al ser inteligentes,
                permiten que la seguridad este siempre presente en su vida.</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    </main>

    <footer class="d-flex flex-wrap justify-content-between align-items-center px-4 py-4 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">Virtual XP 2024 Ⓡ. Estamos comprometidos con atender sus necesidades, ¡Contáctenos!</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="inicio.php" class="nav-link px-2 text-muted">Inicio</a></li>
            <li class="nav-item"><a href="productos.php" class="nav-link px-2 text-muted">Productos</a></li>
            <li class="nav-item"><a href="contacto.php" class="nav-link px-2 text-muted">Contacto</a></li>
        </ul>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <audio controls>
            <source src="bleach number one.mp3" type="audio/mpeg">

  </body>
</html>