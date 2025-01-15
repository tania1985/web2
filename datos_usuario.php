<?php
session_start();
if (!isset($_SESSION["idusuario"])) {
    header("Location: login.php");
}
include("conexiondb.php");
$sql = "select * from usuarios where idusuario = :idusuario";
$stm = $conexion->prepare($sql);
$stm->bindParam(":idusuario", $_SESSION["idusuario"]);
$stm->execute();
$row = $stm->fetch(PDO::FETCH_ASSOC);
if (! $row) {
    header("Location: login.php");
}
include("./partials/cabecera.php");
?>
<div class="contenedorPrincipal">
    <form>
</div>
<?php
include("./partials/footer.php");   
?>