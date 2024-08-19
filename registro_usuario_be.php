<?php

include 'conexion_be.php';

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];
$hash = password_hash($Contrasena, PASSWORD_BCRYPT);

$query = "INSERT INTO usuarios(Nombre, Correo, Contrasena)
          VALUES('$Nombre', '$Correo', '$hash')";


//Verificar el Correo no se repita en la base de datos

$verificar_Correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo = '$Correo' ");

if(mysqli_num_rows($verificar_Correo) > 0){
    echo '
        <script>
            alert("Este Correo ya esta registrado, intenta con otro diferente");
            window.location = "registro.php";
        </script>
    ';
    exit();

}

//Verificar el Nombre no se repita en la base de datos

$verificar_Nombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre = '$Nombre' ");

if(mysqli_num_rows($verificar_Nombre) > 0){
    echo '
        <script>
            alert("Este Nombre ya esta registrado, intenta con otro diferente");
            window.location = "registro.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "index.php";
        </script>
        
    ';
    exit();
}else{
    echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "registro.php";
        </script>
    ';
    exit();    
}

mysqli_close($conexion);

?>



