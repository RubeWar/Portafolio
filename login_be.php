<?php

include 'conexion_be.php';

$nombre = $_POST['Nombre'];
$contrasena = $_POST['Contrasena'];
$query = mysqli_query($conexion, "SELECT Nombre, Contrasena FROM usuarios WHERE Nombre = '$nombre' ");
$fila = mysqli_num_rows($query);
if($fila > 0){
    $row = mysqli_fetch_row($query);
    if(password_verify($contrasena, $row[1])){
        session_start();
        $_SESSION['cliente'] = $nombre;
        echo '
            <script>
                alert("Se inicio sesión exitosamente.");
                window.location = "inicio.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Contraseña no válida");
                window.location = "index.php";
            </script>
        ';
    }
}else{
    echo '
        <script>
            alert("No se encontro usuario con ese nombre.");
            window.location = "index.php";
        </script>
    ';
}

?>



