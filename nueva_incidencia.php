<?php
if(isset($_POST["fecha"])){
    session_start();
    include("conexiondb.php");
    $fecha = $_POST["fecha"];
    $descripcion = $_POST["descripcion"];
    $idusuario = $_SESSION["idusuario"];
    $sql = "insert into incidencias (fecha,descripcion,idusuario) values (:fecha,:descripcion,:idusuario)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':idusuario', $idusuario);
    $stmt->execute();
    $conexion = null;
    header("Location: main.php");
}else{
    header("Location: main.php");
}
?>