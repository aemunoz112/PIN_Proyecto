<?php
include('controlador/conexion.php');
session_start();
if(!isset($_SESSION['usuario'])){
    header("location: login.php");
    exit;
}

$id_user = $_SESSION['usuario'];
$sql = "SELECT usuario FROM datos WHERE usuario = '$id_user'";

$result = $conex->query($sql);

$nombre_usuario = ""; // Inicializar la variable para evitar la advertencia de variable no definida

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombre_usuario = $row['usuario']; // Asignar el nombre de usuario recuperado de la base de datos a la variable
} else {
    // Manejar el caso en que no se encuentre el nombre de usuario en la base de datos
    // Puedes mostrar un mensaje de error o asignar un valor predeterminado a $nombre_usuario
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/inicio.css">
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<section class="container">
        <!-- Nueva sección para el menú de opciones -->
        <nav class="menu-section">
            <ul class="menu">
       
        <li id="contact-user"><a href="contactar_usuario.php">Contactar</a></li>
        <li id="contact-user"><a href="historial.php">Historial</a></li>


                <li class="user-info">
                    <h1>Bienvenido(a) <?php echo $nombre_usuario; ?></h1>
                    <div class="dropdown">
                        <a href="#" class="dropbtn">Más</a>
                        <div class="dropdown-content">
                            <a href="info.php">Información</a>
                            <a href="controlador/salir.php">Cerrar Sesión</a>
                            
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
</section>
<section class="ambiente">
        <!-- Primera parte: Temperatura -->
        <div class="part temperature">
            <h2>Temperatura</h2>
            <section class=desc> 
            <p>¿Quieres saber la temperatura?</p>
            <button>Mostrar</button>

            </section>
        </div>

        <!-- Segunda parte: Humedad -->
        <div class="part humidity">
            <h2>Humedad</h2>
            <section class=desc> 
            <p>¿Quieres saber la humedad?</p>
            <button>Mostrar</button>

            </section>
        </div>

        <!-- Tercera parte: Calidad del aire -->
        <div class="part air-quality">
            <h2>Calidad del aire</h2>
            <section class=desc> 
            <p>¿Quieres saber la calidad del aire?</p>
            <button>Mostrar</button>

            </section>
        </div>
    </section>
</body>
</html>
