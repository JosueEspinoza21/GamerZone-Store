<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerZone Store - Productos</title>
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
            background-image: url('../SRC/IMG/Carrito.png');
            background-size: cover;
            display: block;
            cursor: pointer;
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

        /* Estilo del Banner de Productos */
        .banner {
            background-image: url('bannerGamer.jpg');
            background-size: cover;
            background-position: center;
            height: 200px;
            /* Ajustado para cubrir más área */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-size: 30px;
            padding-top: 0;
            margin-bottom: 0;
            /* Reducir espacio entre el banner y la sección de productos */
        }

        .banner h2 {
            background-color:rgb(91, 173, 131);
            /* Gris semi-transparente */
            padding: 20px;
            border-radius: 0px;
            width: 100%;
            text-align: center;
            font-size: 2.5em;
            margin: 0;
        }

        /* Estilo de los productos */
        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            /* 4 columnas */
            gap: 20px;
            /* Espacio entre productos */
            padding: 20px;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }

        .product-card img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-card h3 {
            margin: 10px 0;
        }

        .product-card p {
            color: #555;
        }

        footer {
            background-color: #0b0c10;
            color: white;
            text-align: center;
            padding: 50px;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
        }

        .cta button {
            background-color: #66fcf1;
            color: black;
            padding: 10px 20px;
            font-size: 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .cta button:hover {
            background-color: #1f2833;
            color: white;
        }
    </style>
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
            background-image: url('../SRC/IMG/Carrito');
            background-size: cover;
            display: block;
            cursor: pointer;
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

        /* Estilo del Banner de Productos */
        .banner {
            background-image: url('banner_image.jpg');
            background-size: cover;
            background-position: center;
            height: 150px;
            /* Ajusta la altura para que no sea tan grande */
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* Cambiado de center a flex-start para alinearlo hacia arriba */
            color: white;
            text-align: center;
            font-size: 10px;
            padding-top: 30px;
            /* Agregar espacio en la parte superior para ajustar la posición del texto */
        }
        
        

        /* Estilo de los productos */
        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            /* 4 columnas */
            gap: 20px;
            /* Espacio entre productos */
            padding: 20px;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }

        .product-card img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-card h3 {
            margin: 10px 0;
        }

        .product-card p {
            color: #555;
        }

        footer {
            background-color: #0b0c10;
            color: white;
            text-align: center;
            padding: 50px;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
        }

        .cta button {
            background-color: #66fcf1;
            color: black;
            padding: 10px 20px;
            font-size: 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .cta button:hover {
            background-color: #1f2833;
            color: white;
        }


        /* Estilo de los productos */
.products {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 columnas */
    gap: 20px; /* Espacio entre productos */
    padding: 20px;
}

.product-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
}

.product-card img {
    width: 130px; /* Ajustar al tamaño deseado */
    height: 130px; /* Ajustar al tamaño deseado */
    object-fit: cover;
    border-radius: 10px;
}

.product-card h3 {
    font-size: 1.2em;
    font-weight: bold;
    margin: 10px 0;
}

.product-card p {
    font-size: 1em;
    color: #555;
    margin-bottom: 10px;
}

.cta button {
    background-color: #66fcf1;
    color: black;
    padding: 10px 20px;
    font-size: 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cta button:hover {
    background-color: #1f2833;
    color: white;
}

/* Estilo de los productos */
.products {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 columnas */
    gap: 20px; /* Espacio entre productos */
    padding: 20px;
}

.product-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
}

.product-card img {
    width: 130px; /* Ajustar al tamaño deseado */
    height: 130px; /* Ajustar al tamaño deseado */
    object-fit: cover;
    border-radius: 10px;
}

.product-card h3 {
    font-size: 1.2em;
    font-weight: bold;
    margin: 10px 0;
}

.product-card p {
    font-size: 1em;
    color: #555;
    margin-bottom: 10px;
}

.cta button {
    background-color: #66fcf1;
    color: black;
    padding: 10px 20px;
    font-size: 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cta button:hover {
    background-color: #1f2833;
    color: white;
}

/* Estilo de los productos */
.products {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 columnas */
    gap: 20px; /* Espacio entre productos */
    padding: 20px;
}

.product-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
}

.product-card img {
    width: 130px; /* Ajustar al tamaño deseado */
    height: 130px; /* Ajustar al tamaño deseado */
    object-fit: cover;
    border-radius: 10px;
}

.product-card h3 {
    font-size: 1.2em;
    font-weight: bold;
    margin: 10px 0;
}

.product-card p {
    font-size: 1em;
    color: #555;
    margin-bottom: 10px;
}

.cta button {
    background-color: #66fcf1;
    color: black;
    padding: 10px 20px;
    font-size: 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cta button:hover {
    background-color: #1f2833;
    color: white;
}

/* Estilo del título de las categorías */
.category-title {
    text-align: center;
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
}

/* Estilo de los productos */
.products-section {
        background-color: #f1f1f1; /* Fondo de la sección */
        padding: 40px 20px; /* Espaciado alrededor de la sección */
        text-align: center; /* Centrar el contenido */
    }

    .product-title {
        font-size: 24px; /* Tamaño del título */
        color: #0b0c10; /* Color del texto */
        margin-bottom: 30px; /* Espacio debajo del título */
        padding-top: 0; /* Asegura que no haya espacio extra encima */
        
    }

    .products {
        display: grid; /* Cambié flexbox por grid para un mejor control */
        grid-template-columns: repeat(4, 1fr); /* Tres columnas */
        gap: 50px; /* Espaciado entre los productos */
        justify-items: center; /* Centrar los productos */
    }


    /* Estilo de las tarjetas de producto */
    .product-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 20px;
        width: 270px; /* Ajusta el tamaño de las tarjetas de producto */
    }

    .product-card img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .product-card img:hover {
        transform: scale(1.1); /* Zoom al 110% */
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2); /* Sombra al pasar el mouse */
    }

    .product-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-10px); /* Eleva la tarjeta un poco */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Aumenta la sombra */
    }

     /* Estilo para el dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-button {
    background-color: #1f2833;
    color: white;
    padding: 15px 30px;
    font-size: 18px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.dropdown-button:hover {
    background-color: #66e8fc;
    color: black;
}

.dropdown-content {
    display: none; /* Ocultar inicialmente */
    position: absolute;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 5px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-bottom: 1px solid #ddd;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown-content a:last-child {
    border-bottom: none;
}

.show {
    display: block; /* Mostrar al hacer clic */
}
    
.bannerImagen {
    background-image: url('../SRC/IMG/BannerGamer.png'); /* Ruta de la imagen */
    background-size: contain; /* Ajusta la imagen sin recortes */
    background-position: center top; /* Asegura que la imagen se ajuste desde la parte superior */
    background-repeat: no-repeat; /* Evita que la imagen se repita */
    height: 550px; /* Ajusta la altura según necesites */
    width: 100%;
    position: relative; /* Necesario para colocar el texto sobre la imagen */
}
  


    </style>
</head>

<body>

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

<!-- header.php -->
<nav class="main-nav">
        <div class="dropdown">
            <button class="dropdown-button" onclick="toggleDropdown()">Categorías</button>
            <div id="dropdown-content" class="dropdown-content">
                <a href="gaming.php">Gaming</a>
                <a href="oficina.php">Oficina</a>
                <a href="laptop.php">laptops</a>
                <a href="componentes.php">Componentes</a>
            </div>
        </div>

        <a href="../index.php">Inicio</a>
        <a href="productos.php">Productos</a>
        <a href="servicios.php">Servicios</a>
        <a href="contacto.php">Contacto</a>
        <a href="Nosotros.php">Nosotros</a>
        <a href="carrito.php">Carrito</a>
    </nav>
     
    <div class="bannerImagen"></div>

    <!-- Banner de productos -->
    <div class="banner">
        <h2 id="tituloproducto">PRODUCTOS DISPONIBLES</h2>
    </div>

    <!-- Sección de productos -->
    <section class="products">
        
    <section class="products-section">
    <!-- Categoría Gamer -->
    <div class="product-category gamer">
        <h2>Productos Gamer</h2>
        <div class="products">
          
            <div class="product-card">
                <img src="https://www.xtremepc.com.mx/cdn/shop/files/8510d6f4-20a4-4b77-8ee1-baf4a5a0067c_800x.png?v=1719250626" alt="PC Gamer RTX">
                <h3>PC Gamer RTX</h3>
                <p>Desde $1200 - Equipado con tarjeta RTX 3060 y procesador Intel i7.</p>
                <div class="cta">
                    <button onclick="addToCart('PC Gamer RTX', 1200, 'https://www.xtremepc.com.mx/cdn/shop/files/8510d6f4-20a4-4b77-8ee1-baf4a5a0067c_800x.png?v=1719250626')">Añadir al Carrito</button>
                </div>
            </div>

            <div class="product-card">
        <img src="https://http2.mlstatic.com/D_NQ_NP_609786-MLM78250004469_082024-O.webp" alt="PC Gamer 1">
        <h3>PC Gamer RTX 4090</h3>
        <p>Desde $3000 - Potenciada con la tarjeta RTX 4090 y procesador Intel i9, diseñada para gaming 4K y multitarea extrema.</p>
        <div class="cta">
            <button onclick="addToCart('PC Gamer RTX 4090', 3000, 'https://http2.mlstatic.com/D_NQ_NP_609786-MLM78250004469_082024-O.webp')">Añadir al Carrito</button>
        </div>
        </div>

        <div class="product-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFfep4w3EA_R55M-dwFTNCEjuLQ5cXHGCpbw&s" alt="PC Gamer 2">
        <h3>PC Gamer Ryzen XT</h3>
        <p>Desde $1800 - Procesador Ryzen 5800X, tarjeta RX 6800 XT y 16GB RAM para un rendimiento sin igual en juegos modernos.</p>
        <div class="cta">
        <button onclick="addToCart('PC Gamer Ryzen XT', 1800, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFfep4w3EA_R55M-dwFTNCEjuLQ5cXHGCpbw&s')">Añadir al Carrito</button>
        </div>
        </div>
        <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/61O0LZcOK4L.jpg" alt="PC Gamer 3">
        <h3>PC Gamer Nitro</h3>
        <p>Desde $1500 - RTX 3060, Intel i5 de 12ª generación, 1TB SSD y diseño compacto.</p>
        <div class="cta">
        <button onclick="addToCart('PC Gamer Nitro', 1500, 'https://m.media-amazon.com/images/I/61O0LZcOK4L.jpg')">Añadir al Carrito</button>
        </div>
        </div>
        <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/816nkD541bL.jpg" alt="PC Gamer 4">
        <h3>PC Gamer Predator</h3>
        <p>Desde $2500 - Tarjeta RTX 3080, procesador Ryzen 7, 32GB RAM y refrigeración líquida RGB.</p>
        <div class="cta">
        <button onclick="addToCart('PC Gamer Predator', 2500, 'https://m.media-amazon.com/images/I/816nkD541bL.jpg')">Añadir al Carrito</button>
        </div>
        </div>
        <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/91kWtHrH2LL.jpg" alt="PC Gamer 5">
        <h3>PC Gamer Shadow</h3>
        <p>Desde $2000 - RTX 3070 Ti, procesador Intel i7, 16GB RAM y chasis con iluminación personalizable.</p>
        <div class="cta">
        <button onclick="addToCart('PC Gamer Shadow', 2000, 'https://m.media-amazon.com/images/I/91kWtHrH2LL.jpg')">Añadir al Carrito</button>
        </div>
        </div>
        <div class="product-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA-XmfOujzAoJo8SReg7wuoBW-jEAp9hf63g&s" alt="PC Gamer 6">
        <h3>PC Gamer Phoenix</h3>
        <p>Desde $1700 - Gráficos RX 6700 XT, Ryzen 5, 1TB NVMe SSD y diseño minimalista.</p>
        <div class="cta">
        <button onclick="addToCart('PC Gamer Phoenix', 1700, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA-XmfOujzAoJo8SReg7wuoBW-jEAp9hf63g&s')">Añadir al Carrito</button>
        </div>
        </div>
        <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/61AKUmd2ijL._AC_UF894,1000_QL80_.jpg" alt="PC Gamer 7">
        <h3>PC Gamer Eclipse</h3>
        <p>Desde $1400 - RTX 3060 Ti, Intel i5, y almacenamiento híbrido de 2TB HDD + 512GB SSD.</p>
        <div class="cta">
        <button onclick="addToCart('PC Gamer Eclipse', 1400, 'https://m.media-amazon.com/images/I/61AKUmd2ijL._AC_UF894,1000_QL80_.jpg')">Añadir al Carrito</button>
        </div>
        </div>
        <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/41645ymB34L._AC_SY780_.jpg" alt="PC Gamer 8">
        <h3>PC Gamer Lightning</h3>
        <p>Desde $1300 - RTX 3050, Intel i3, y diseño modular para fácil actualización.</p>
        <div class="cta">
        <button onclick="addToCart('PC Gamer Lightning', 1300, 'https://m.media-amazon.com/images/I/41645ymB34L._AC_SY780_.jpg')">Añadir al Carrito</button>
        </div>
        </div>
        <div class="product-card">
        <img src="https://sipoonline.cl/wp-content/uploads/2024/02/Pc-Titan-7.png" alt="PC Gamer 9">
        <h3>PC Gamer Titan</h3>
        <p>Desde $2700 - RTX 3090, Intel i9, 64GB RAM y refrigeración líquida avanzada.</p>
        <div class="cta">
        <button onclick="addToCart('PC Gamer Titan', 2700, 'https://sipoonline.cl/wp-content/uploads/2024/02/Pc-Titan-7.png')">Añadir al Carrito</button>
        </div>
        </div>
        <div class="product-card">
        <img src="https://gladiatorpc.co.uk//assets/img/configurator/74651Image1.webp" alt="PC Gamer 10">
        <h3>PC Gamer Nova</h3>
        <p>Desde $1600 - Tarjeta RX 6600, Ryzen 5600G y diseño silencioso.</p>
        <div class="cta">
        <button onclick="addToCart('PC Gamer Nova', 1600, 'https://gladiatorpc.co.uk//assets/img/configurator/74651Image1.webp')">Añadir al Carrito</button>
        </div>
        </div>
                    <!-- Más productos de Gamer aquí -->
                </div>
            </div>

        <!-- Agrega más productos aquí -->
    </section>

    <!-- <footer>
        <p>&copy; 2024 GamerZone Store. Todos los derechos reservados.</p>
    </footer> -->

    <script>let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Modificar la función addToCart para incluir la imagen del producto
function addToCart(productName, productPrice, imgSrc) {
    const product = { name: productName, price: parseFloat(productPrice), imgSrc: imgSrc }; // Asegúrate de incluir imgSrc
    cart.push(product);
    localStorage.setItem('cart', JSON.stringify(cart)); // Guardar en localStorage
    updateCartBadge();
}

// Actualizar el contador del carrito
function updateCartBadge() {
    const cartBadge = document.getElementById('cart-badge');
    if (cartBadge) cartBadge.innerText = cart.length;
}

// Cargar el carrito desde localStorage
function loadCart() {
    const savedCart = JSON.parse(localStorage.getItem('cart'));
    if (savedCart) cart = savedCart; // Cargar cart desde localStorage
    updateCartBadge();
    displayCartItems(); // Mostrar los productos añadidos
}

// Mostrar los productos del carrito
function displayCartItems() {
    const cartItems = document.getElementById('cart-items');
    const totalPriceElement = document.getElementById('total-price');
    
    if (!cartItems || !totalPriceElement) return; // Validar si los elementos existen en el DOM
    
    cartItems.innerHTML = ''; // Limpiar lista
    let totalPrice = 0;

    cart.forEach((item, index) => {
        const itemElement = document.createElement('li');
        itemElement.classList.add('cart-item');
        itemElement.innerHTML = `
            <img src="${item.imgSrc}" alt="${item.name}" class="cart-item-image">
            <span>${item.name} - $${item.price.toFixed(2)}</span>
            <button class="remove-item" onclick="removeFromCart(${index})">Eliminar</button>
        `;
        cartItems.appendChild(itemElement);
        totalPrice += item.price;
    });

    // Actualizar el precio total
    totalPriceElement.textContent = `Total: $${totalPrice.toFixed(2)}`;
}

// Eliminar un producto del carrito
function removeFromCart(index) {
    cart.splice(index, 1); // Eliminar producto por su índice
    localStorage.setItem('cart', JSON.stringify(cart)); // Actualizar localStorage
    updateCartBadge();
    displayCartItems(); // Actualizar la vista del carrito
}

// Inicializar el carrito al cargar la página
window.onload = loadCart;
</script>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById("dropdown-content");
        dropdown.classList.toggle("show");
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropdown-button')) {
            const dropdowns = document.getElementsByClassName("dropdown-content");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
</body>

</html>






