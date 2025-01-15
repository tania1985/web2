<?php
session_start();
// Verificamos que el usuario esté autenticado
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

// Incluimos el archivo de conexión a la base de datos
include("conexiondb.php");

// Verificamos si el parámetro 'incidencia' está presente en la URL
if (isset($_GET['incidencia'])) {
    // Obtenemos el ID de la incidencia que se quiere borrar
    $incidencia_id = $_GET['incidencia'];

    // Preparamos y ejecutamos la consulta SQL para eliminar la incidencia
    $sql = "DELETE FROM incidencias WHERE id = :id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':id', $incidencia_id, PDO::PARAM_INT);

    // Ejecutamos la consulta y verificamos si se eliminó correctamente
    if ($stmt->execute()) {
        // Reiniciar el contador de AUTO_INCREMENT para que el siguiente id comience en 1
        $resetSql = "ALTER TABLE incidencias AUTO_INCREMENT = 1";
        $conexion->exec($resetSql);
        
        // Si la eliminación fue exitosa, redirigimos a la página principal
        header("Location: main.php");
    } else {
        // Si algo salió mal, mostramos un mensaje de error
        echo "Error al eliminar la incidencia.";
    }
} else {
    echo "No se especificó ninguna incidencia para eliminar.";
}
?>
