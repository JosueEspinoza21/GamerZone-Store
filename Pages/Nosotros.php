<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
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
            background-image: url('../SRC/IMG/Carrito.png'); /* Cambia a la imagen del carrito */
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
        .banner {
            background-image: url('banner_image.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-size: 36px;
        }

        .about-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 40px 20px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            margin: 10px 0;
            font-size: 20px;
            color: #333;
        }

        .card p {
            margin: 0;
            font-size: 16px;
            color: #666;
        }

        .card .hidden-content {
            display: none;
            margin-top: 10px;
            font-size: 14px;
            color: #444;
        }

        .card.expanded .hidden-content {
            display: block;
        }

        .card img {
            width: 120px;
            height: 120px;
            border-radius: 8px; /* Cambié el borde redondeado */
            margin-bottom: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
            border: 2px solid #ddd; /* Borde alrededor de la imagen */
            transition: width 0.3s, height 0.3s, box-shadow 0.3s ease;
        }

        .card.expanded img {
            width: 150px;
            height: 150px; /* Aumenta el tamaño de la imagen cuando la tarjeta se expanda */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Aumenta la sombra al expandir */
        }

        .card .contact-links a {
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
            margin: 5px;
            display: inline-block;
        }

        .card .contact-links a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #0b0c10;
            color: white;
            text-align: center;
            padding: 50px;
            margin-top: 40px;
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cards = document.querySelectorAll(".card");

            cards.forEach(card => {
                card.addEventListener("click", () => {
                    card.classList.toggle("expanded");
                });
            });
        });
    </script>
</head>
<body>
    <header>
        <h1>Acerca de Nosotros</h1>
    </header>
    <nav class="main-nav">
        <a href="../index.php">Inicio</a>
        <a href="productos.php">Productos</a>
        <a href="servicios.php">Servicios</a>
        <a href="contacto.php">Contacto</a>
        <a href="Nosotros.php">Nosotros</a>
    </nav>

    <h1 align="center">Conoce a los creadores de nuestra tienda y su visión.</h1>

    <div class="about-container">
        <div class="card">
            <img src="../SRC/IMG/David.jpg" alt="David Martinez">  

            <h3>David Martinez</h3>
            <p>Desarrollador Frontend</p>
            <div class="hidden-content">
                Es un desarrollador frontend en crecimiento, enfocado en crear experiencias web dinámicas y funcionales. Le apasiona mejorar la interacción del usuario con interfaces frescas y fáciles de usar.
            </div>
            <div class="contact-links">
                <a href="mailto:DavidMartinez@tienda.com">Email</a>
                <a href="https://linkedin.com/in/DavidMartinez" target="_blank">LinkedIn</a>
            </div>
        </div>

        <div class="card">
            <img src="../SRC/IMG/JosueEspinoza.jpg" alt="W. Josué Espinoza">
            <h3>W. Josué Espinoza Andino</h3>
            <p>Diseñador UX/UI</p>
            <div class="hidden-content">
                Encargado del diseño UX/UI, asegurando que cada interacción y detalle de nuestras interfaces sea visualmente atractiva y funcional, brindando una experiencia de usuario fluida e intuitiva.
            </div>
            <div class="contact-links">
                <a href="mailto:josueespinoza237@gmail.com">Email</a>
                <a href="https://www.linkedin.com/in/josu%C3%A9-espinoza-a14859286" target="_blank">LinkedIn</a>
            </div>
        </div>

        <div class="card">
            <img src="../SRC/IMG/Antony.jpg" alt="Anthony">
            <h3>Anthony</h3>
            <p>Desarrollador Backend</p>
            <div class="hidden-content">
                Se encarga de la infraestructura tecnológica que respalda nuestra tienda, trabajando para ofrecer un rendimiento constante y un entorno seguro para nuestros usuarios.
            </div>
            <div class="contact-links">
                <a href="mailto:carlos@tienda.com">Email</a>
                <a href="https://linkedin.com/in/carlosgarcia" target="_blank">LinkedIn</a>
            </div>
        </div>
    </div>

    <footer>
        <!-- Redes sociales -->
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
</body>
</html>
