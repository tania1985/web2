<?php
if (isset($_POST["email"])) {
    include("conexiondb.php");
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Preparar y ejecutar la consulta para obtener el hash de la contraseña almacenada
    $sql = "SELECT password FROM usuarios WHERE email = :email";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result && password_verify($password, $result['password'])) {
        // Redirigir a la página de inicio o dashboard
    header("Location: main.php");
    } else {
        echo "Email o contraseña incorrectos";
    }

    // Cerrar la conexión
    $conexion = null;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - Login </title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div>
        <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
        <form action="" method="post" id="formulario">
            <label for="usuario">Usuario</label>
            <input type="email" name="email" id="usuario" placeholder="Introduce tu email"> 
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button>Login</button>
        </form>
        <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a>.</p>
        <?php if (isset($error)) { ?>
            <p class="error"><?php echo $error; }?>
        </p>
    </div>
    <script src="js/login.js"></script>
</body>
</html>