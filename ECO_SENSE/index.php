<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <title>EcoSense</title>
</head>
<body>

    <section class="container">
        <!-- Nueva sección para el menú de opciones -->
        <nav class="menu-section">
            <ul class="menu">
                <li><a href="#">Inicio</a></li>
                
                <li><a href="#section3">Sobre nosotros</a></li>
                <li><a href="mision_vision.php">Misión y Visión</a></li>
                <li><a href="contactar.php">Contactar</a></li>

                
            </ul>
        </nav>

    <section id="section1" class="section">
        <h2>Iniciar Sesión</h2>
        <h5>Accede a tu cuenta con tu correo y contraseña.</h5>
        <div class="button-container">
            <button class="login-button" onclick="navigateTo('login.php')">Ingresar</button>
            
            <button class="registrar-button" onclick="navigateTo('registro.php')">Registrarse</button>
            
        </div>
        
    </section>

    <section id="section2" class="section">
        <h2>Chat</h2>
        <div class="telegram">
            <h5>Inicio de visualización</h5>
            <p>Mantén una comunicacion con el prototipo.</p>
            <button class="conversacion-button" onclick="navigateTo('inicio.php')">Ver datos meteorologicos</button>
        </div>
        <div class="notificaciones">
            <h5>Notificaciones</h5>
            <p>Recibe alertas instantáneas para no perder ningún dato importante.</p>
            <button class="noticias-button">Abrir noticias</button>
        </div>
        <h2>Funcionalidades</h2>
        <div class="funcionalidades">
            <div class="colunma">
                <h3>1. Envío de Mensaje</h3>
                <p>Interactúa con un click de manera sencilla y rápida.</p>
            </div>
            <div class="colunma">
                <h3>2. Compartir Información</h3>
                <p>Comparte los datos con demas personas, para que se informen acerca del ambiente del campus</p>
            </div>
            <div class="colunma">
                <h3>3. Historial de Conversaciones</h3>
                <p>Accede a los datos anteriores para no perder detalles importantes.</p>
            </div>
        </div>
        <div class="container">
            <img src="img/correo.png" alt="Imagen" class="imgc">
            <p class="tex3">Contactanos</p>
            <p class="ps">Con solo un par de clics, podrás contactarte con nosotros.</p>
            <button class="mensaje-button" onclick="navigateTo('contactar.php')">Enviar mensaje</button>
        </div>
    </section>


    <section class="section" id="section3">
        <h2>Sobre Nosotros</h2>

        <div class="sobre-nosotros-contenido">
            <p>
                Bienvenido a EcoSense, tu plataforma de conciencia ambiental. 
                Nos dedicamos a proporcionar información precisa y relevante sobre la calidad del aire
                y promovemos prácticas sostenibles para preservar nuestro campus universitario.
            </p>
            <p>Conócenos más a fondo y descubre cómo puedes contribuir a un mundo más ecológico.</p>

            
        </div>
    </section>
    
    <script src="JS/login.js"></script>
</body>
</html>
