<?php
if(isset($_POST{"nombre"})){
    include("conexiondb.php");
    try {
        //Preparar y ejecutar la consulta SQL
        $sql = "INSERT INTO usuarios (nombre, email, fecha, password) VALUES (:nombre, :email, :fecha, :password)";
        $snt = $conexion->prepare($sql);
        $snt->bindParam(":nombre", $_POST["nombre"]);
        $snt->bindParam(":email", $_POST["email"]);
        $snt->bindParam(":fecha", $_POST["fecha"]);
        $snt->bindParam(":password", $_POST["password"]);
        // encripta la contraseña antes de guardarla
        $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $snt->bindParam(":password", $hashed_password);
        // $snt->bindParam(":Password", $_POST["password"]);
        $snt->execute();

        echo "Registro creado exitosamente";

        // Redirigir a la página de inicio de sesión
        header("Location: login.html");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
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
        <form action="" method="POST" class="form-register">
            <!-- Nombre y Apellidos -->
            <div class="form-group">
                <label for="name">Nombre y Apellidos:</label>
                <input type="text" id="name" name="nombre" required placeholder="Tu nombre y apellidos">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required placeholder="tuemail@dominio.com">
            </div>

            <!-- Fecha de Nacimiento -->
            <div class="form-group">
                <label for="dob">Fecha de Nacimiento:</label>
                <input type="date" id="fecha" name="fecha" required>
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
        <p class="login-link">¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
    </div>
    <script src="js/registro.js"></script>
</body>
</html>
