<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerZone Store - Servicios</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        /* Header */
        header {
            background-color: #0b0c10;
            padding: 20px;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
        }
        header .logo {
            max-width: 100px;
            margin-right: 20px;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            text-align: center;
            flex-grow: 1;
        }
        header .user-options {
            position: absolute;
            right: 20px;
            display: flex;
            gap: 15px;
        }
        header .user-options a {
            color: white;
            text-decoration: none;
        }
        header .user-options a:hover {
            color: #66fcf1;
        }
        .cart-container {
            position: relative;
        }
        .cart-icon {
            width: 40px;
            height: 40px;
            background-image: url('../SRC/IMG/Carrito.png');
            background-size: cover;
            display: block;
        }
        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: red;
            color: white;
            font-size: 14px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* Navegación */
        nav.main-nav {
            background-color: #1f2833;
            display: flex;
            justify-content: center;
            padding: 10px;
        }
        nav.main-nav a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            font-size: 18px;
        }
        nav.main-nav a:hover {
            background-color: #66fcf1;
            color: black;
        }
        /* Sección de servicios */
        .services {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 40px 0;
            padding: 0 20px;
        }
        .service-card {
            background-color: white;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }
        .service-card h3 {
            margin: 10px 0;
        }
        .service-card p {
            color: #555;
        }
        /* Footer */
        footer {
            background-color: #0b0c10;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
        footer p {
            margin: 0;
        }
        /* Estilos Redes Sociales */
.social-media {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.social-icon img {
    width: 40px;
    height: 40px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.social-icon img:hover {
    transform: scale(1.2); /* Aumenta ligeramente el tamaño al pasar el mouse */
    box-shadow: 0 4px 10px rgba(255, 255, 255, 0.5); /* Añade un efecto de sombra */
}
    </style>
</head>
<body>

<!-- Header -->
<header>
    <img src="../SRC/IMG/estan.png" alt="Logo GamerZone" class="logo">
    <h1>GamerZone Store</h1>
    <div class="user-options">
        <a href="login.php">Iniciar Sesión</a>
        <a href="registro.php">Registrarse</a>
        <div class="cart-container" onclick="window.location.href='carrito.php'">
            <span id="cart-badge" class="cart-badge">0</span>
            <img src="../SRC/IMG/Carrito.png" class="cart-icon">
        </div>
    </div>
</header>

<!-- Navegación -->
<nav class="main-nav">
    <a href="../index.php">Inicio</a>
    <a href="productos.php">Productos</a>
    <a href="servicios.php">Servicios</a>
    <a href="contacto.php">Contacto</a>
    <a href="Nosotros.php">Nosotros</a>
</nav>

<!-- Contenido de servicios -->
<section class="services">
    <h2>Nuestros Servicios</h2>
    <div class="service-card">
        <h3>Ensamblaje de PCs Personalizadas</h3>
        <p>Te ayudamos a construir la PC de tus sueños con componentes de alta calidad.</p>
    </div>
    <div class="service-card">
        <h3>Mantenimiento y Optimización</h3>
        <p>Ofrecemos limpieza y optimización para mantener tu PC en las mejores condiciones.</p>
    </div>
    <div class="service-card">
        <h3>Asesoría Técnica</h3>
        <p>Consultoría personalizada para ayudarte a elegir los mejores componentes para tus necesidades.</p>
    </div>
</section>

<!-- Footer -->
<footer>
            <!-- Redes Sociales -->
            <div class="social-media">
    <a href="https://facebook.com" target="_blank" class="social-icon">
    <img src="../SRC/IMG/facebook.png" alt="Facebook" class="category-icon">
    </a>
    <a href="https://twitter.com" target="_blank" class="social-icon">
        <img src="../SRC/IMG/X.png" alt="Twitter" class="category-icon">
    </a>
    <a href="https://instagram.com" target="_blank" class="social-icon">
        <img src="../SRC/IMG/instagram.png" alt="Instagram" class="category-icon">
    </a>
    <a href="https://youtube.com" target="_blank" class="social-icon">
        <img src="../SRC/IMG/youtube.png" alt="YouTube" class="category-icon">
    </a>
    <a href="https://tiktok.com/" target="_blank" class="social-icon">
        <img src="../SRC/IMG/tik-tok.png" alt="TikTok" class="category-icon">
    </a>
</div>
<br>
    <p>&copy; 2024 GamerZone Store. Todos los derechos reservados.</p>
</footer>

<script src="carrito.js"></script>
</body>
</html>
