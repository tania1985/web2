<?php

$servidor = "localhost"; // o la IP del servidor
$usuario = "root";
$contraseña = "";
$basedatos = "web2";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $basedatos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql="INSERT INTO usuarios (nombre, email, fecha, password)
 VALUES ('".$_POST["nombre"]."','".$_POST["email"]."','".$_POST["fecha"]."','".$_POST["password"]."')";

if (mysqli_query($conn, $sql)) {
    echo "Nuevo registro creado";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

// Cerrar conexión
$conn->close();
?>