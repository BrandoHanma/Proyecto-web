<?php
session_start();
include("conexion_be.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe y valida los inputs
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $contrasena = $_POST['contrasena'];

    if (!empty($email) && !empty($contrasena)) {
        // Prepara la consulta para evitar inyecciones SQL
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            
            // Verifica la contraseña con hash
            if (password_verify($contrasena, $usuario['contrasena'])) {
                $_SESSION['usuario'] = $email;
                header("Location: ../index.html");
                exit;
            } else {
                // Contraseña incorrecta
                echo '<script>
                    alert("Contraseña incorrecta. Inténtalo nuevamente.");
                    window.location="../login.php";
                    </script>';
                exit;
            }
        } else {
            // Usuario no encontrado
            echo '<script>
                alert("Correo electrónico no registrado.");
                window.location="../login.php";
                </script>';
            exit;
        }
    } else {
        // Campos vacíos
        echo '<script>
            alert("Por favor, completa todos los campos.");
            window.location="../login.php";
            </script>';
        exit;
    }
} else {
    // Método incorrecto
    header("Location: ../login.php");
    exit;
}
?>
