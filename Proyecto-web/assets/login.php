<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<style>
        body {
            cursor: url('img/cursor.png'), auto;
        }
    </style>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                <form action="php/login_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="email" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button type="submit">Entrar</button>
                </form>
                <!-- Register -->
                <form action="db/registrousuario.php" method="POST" class="formulario__register" style="text-align: center;">
                   <h2>Regístrarse</h2>
                   <input type="text" placeholder="Nombre completo" name="nombrecompleto" required>
                   <input type="email" placeholder="Correo Electrónico" name="email" required>
                   <input type="text" placeholder="Usuario" name="usuario" required>
                   <input type="password" placeholder="Contraseña" name="contrasena" required>
                <button type="submit">Regístrarse</button>
    
            <div style="margin-top: 10px;">
                <a href="recovery.html" style="color: MediumBlue; text-decoration: underline;">
                   ¿Perdiste la Contraseña?
                </a>
            </div>
        </form>

  </main>

        <script src="js/script.js"></script>
</body>
</html>