<?php
// Incluimos la conexión a la base de datos
include("../php/conexion_be.php");  


// Verificar si se enviaron todos los datos requeridos
if (isset($_POST['nombrecompleto'], $_POST['nueva_contrasena'], $_POST['email'], $_POST['usuario'])) {
    
    // Sanitizar y asegurar los datos
    $nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombrecompleto']);
    $nueva_contrasena = password_hash($_POST['nueva_contrasena'], PASSWORD_DEFAULT);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    
    // Verificar si el usuario existe y los datos coinciden
    $query = "SELECT * FROM usuarios WHERE nombrecompleto = ? AND email = ? AND usuario = ?";
    
    if ($stmt = mysqli_prepare($conexion, $query)) {
        mysqli_stmt_bind_param($stmt, "sss", $nombre_completo, $email, $usuario);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        
        if (mysqli_num_rows($resultado) > 0) {
            // Los datos son válidos, actualizar la contraseña
            $update_query = "UPDATE usuarios SET contrasena = ? WHERE email = ?";
            
            if ($update_stmt = mysqli_prepare($conexion, $update_query)) {
                mysqli_stmt_bind_param($update_stmt, "ss", $nueva_contrasena, $email);
                $update_result = mysqli_stmt_execute($update_stmt);
                
                if ($update_result) {
                    echo '
                    <script>
                    alert("Contraseña actualizada exitosamente.");
                    window.location = "../login.php";
                    </script>';
                } else {
                    echo '
                    <script>
                    alert("Hubo un error al actualizar la contraseña. Por favor, inténtalo nuevamente.");
                    window.location = "../nueva.html";
                    </script>';
                }
                
                mysqli_stmt_close($update_stmt);
            } else {
                echo '
                <script>
                alert("Error en la preparación de la consulta de actualización.");
                window.location = "../nueva.html";
                </script>';
            }
        } else {
            echo '
            <script>
            alert("Los datos proporcionados no coinciden con ninguna cuenta. Por favor, verifica la información.");
            window.location = "../nueva.html";
            </script>';
        }
        
        mysqli_stmt_close($stmt);
    } else {
        echo '
        <script>
        alert("Error en la preparación de la consulta de verificación.");
        window.location = "../nueva.html";
        </script>';
    }
} else {
    // Si los datos no están completos
    echo '
    <script>
    alert("Por favor, completa todos los campos.");
    window.location = "../nueva.html";
    </script>';
}

// Cerrar la conexión
mysqli_close($conexion);
?>