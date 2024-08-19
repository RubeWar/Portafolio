<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />"
</head>
<body>
    <div class="container">
        <div class="header">
            <center>
                <h2>Registrarse</h2>
            </center> 
        </div>
        <form action="registro_usuario_be.php" id="form" method="POST" class="form" >
            <div class="form-control">
                <label for="username">Usuario</label>
                <input type="text" placeholder="Nombre" id="username" name="Nombre">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" placeholder="Ingrese su correo" id="email" name="Correo">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Contraseña</label>
                <input type="password" placeholder="Contraseña" id="password" name="Contrasena">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password2">Ingrese nuevamente contraseña</label>
                <input type="password" placeholder="Ingrese contrasena" id="password2" name="Ingrese_nueva_contrasena">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <button class="button" type="submit">Registrarse</button>
        </form>
        <hr>
        <br>
        <center>
            <a href="index.php" target="_self">Iniciar Sesión</a> 
        </center>
        <br>
        

        <script src="script.js"></script>
    </div>
</body>
</html>
