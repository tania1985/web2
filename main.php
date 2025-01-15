<?php
session_start();
    if(! isset($_SESSION["usuario"])){
        header("Location: login.php");
}
    include("conexiondb.php");
        $sql = "select * from incidencias";
        $result = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web2 - Main </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <img src="img/logo.png" alt="Logo">
        <div>
            <img id="imgUser" class="imgUser" src="img/usuario.jpg" alt="" srcset="">
            <div class="menuUser" id="menuUser">
                <ul>
                    <li><a href="">Datos de usuario </a></li>
                    <li><a href="cerrar_sesion.php">Cerrar Sesión </a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <aside>
            <ul>
                <li><i class="fa-solid fa-cart-shopping"></i>Pedidos</li>
                <li><i class="fa-solid fa-receipt"></i>Facturas</li>
                <li><i class="fa-solid fa-circle-exclamation"></i>Incidencias</li>
                <li><i class="fa-solid fa-calendar"></i>Calendario</li>
                <li><i class="fa-solid fa-newspaper"></i>Presupuestos</li>
            </ul>
        </aside>
        <div class="asideMovil">
            <i id="menuMovil" class="fa-solid fa-bars"></i>
            <ul id="menu">
                <li><i class="fa-solid fa-cart-shopping"></i>Pedidos</li>
                <li><i class="fa-solid fa-receipt"></i>Facturas</li>
                <li><i class="fa-solid fa-circle-exclamation"></i>Incidencias</li>
                <li><i class="fa-solid fa-calendar"></i>Calendario</li>
                <li><i class="fa-solid fa-newspaper"></i>Presupuestos</li>
            </ul>
        </div>
        <section class="contenedorPrincipal">
            <h3> Listado Incidencias </h3>
            <div class="incidencias">
                <form action="nueva_incidencia.php" method="post" id="formIncidencias">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha" required>
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" required>
                    <button>Enviar</button>
                </form>
            </div>
            <div class="lista">
                <table id="tablaIncidencias">
                    <?php
                    while ($row = $result->fetch()) {
                        echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['fecha']."</td>
                        <td>".$row['descripcion']."</td>
                        <td>
                            <i class='fa-solid fa-trash'></i>
                            <i class='fa-solid fa-pen-to-square'></i>
                        </tr>";    
                    }
                    ?>
                    <thead>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Operaciones</th>
                    </thead>
                </table>
            </div>
        </section>
    </main>
    <footer>
        <p>© 2025 Todos los derechos reservados</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>