<?php
if(isset($_POST{"name"})){
    var_dump($_POST);
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - Registro </title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
<div class="container">
        <h2>Crear Cuenta</h2>
        <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
        <form action="procesararchivo.php" method="POST" class="form-register">
            <!-- Nombre y Apellidos -->
            <div class="form-group">
                <label for="name">Nombre y Apellidos:</label>
                <input type="text" id="name" name="Nombre" required placeholder="Tu nombre y apellidos">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required placeholder="tuemail@dominio.com">
            </div>

            <!-- Fecha de Nacimiento -->
            <div class="form-group">
                <label for="dob">Fecha de Nacimiento:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <!-- Contraseña -->
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required placeholder="Crea una contraseña">
            </div>

            <!-- Confirmar Contraseña -->
            <div class="form-group">
                <label for="confirm-password">Confirmar Contraseña:</label>
                <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirma tu contraseña">
            </div>

            <div class="form-group">
                <span id="msg">* Las contraseñas deben ser iguales</span>
                <button id="btnCrear"disabled>Registrarse</button>
            </div>
        </form>
        <p class="login-link">¿Ya tienes una cuenta? <a href="login.html">Iniciar sesión</a></p>
    </div>
    <script src="js/registro.js"></script>
</body>
</html>
