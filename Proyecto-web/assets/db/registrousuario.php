<?php
// Incluimos la conexión a la base de datos
include("../php/conexion_be.php");  

// Verificar si se enviaron todos los datos requeridos
if (isset($_POST['nombrecompleto'], $_POST['contrasena'], $_POST['email'], $_POST['usuario'])) {
    
    // Sanitizar y asegurar los datos
    $nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombrecompleto']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    
    // Verificar si el email ya está registrado
    $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");
    
    if (mysqli_num_rows($verificar_email) > 0) {
        echo '
        <script>
        alert("El email ya está registrado. Por favor, usa otro.");
        window.location="../login.php";
        </script>';
        exit();
    }

    // Verificar si el nombre de usuario ya está registrado
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
    
    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '
        <script>
        alert("El nombre de usuario ya está en uso. Por favor, elige otro.");
        window.location="../login.php";
        </script>';
        exit();
    }

    // Preparar la consulta de inserción
    $query = "INSERT INTO usuarios (nombrecompleto, contrasena, email, usuario) VALUES (?, ?, ?, ?)";
    
    // Usar prepared statements para mayor seguridad
    if ($stmt = mysqli_prepare($conexion, $query)) {
        mysqli_stmt_bind_param($stmt, "ssss", $nombre_completo, $contrasena, $email, $usuario);
        $resultado = mysqli_stmt_execute($stmt);
        
        // Comprobar si se ejecutó correctamente
        if ($resultado) {
            echo '
            <script>
            alert("Usuario registrado exitosamente.");
            window.location="../login.php";
            </script>';
        } else {
            echo '
            <script>
            alert("Hubo un error al registrar el usuario. Inténtalo nuevamente.");
            window.location="../login.php";
            </script>';
        }

        // Cerrar el statement
        mysqli_stmt_close($stmt);
    } else {
        echo '
        <script>
        alert("Error en la preparación de la consulta.");
        window.location="../login.php";
        </script>';
    }

} else {
    // Si los datos no están completos
    echo '
    <script>
    alert("Por favor, completa todos los campos.");
    window.location="../login.php";
    </script>';
}

// Cerrar la conexión
mysqli_close($conexion);
?>
