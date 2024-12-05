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
            background-image: url('banner_image.jpg');
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
        background-color:  rgb(91, 173, 131);
        padding: 10px;
        border-radius: 0px;
        width: 100%;
        text-align: center;
        font-size: 3.5em;
        margin-top: 50px;
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
    background-image: url('../SRC/IMG/BannerComponentes.png'); /* Ruta de la imagen */
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
        <a href="carrito.php">Carrito</a>
    </nav>

    <div class="bannerImagen"></div>

    <!-- Banner de productos -->
    <div class="banner">
    <h2>PRODUCTOS DISPONIBLES</h2>
    </div>

    <!-- Sección de productos -->
    <section class="products">
        
    <section class="products-section">
    <!-- Categoría Gamer -->
    <div class="product-category gamer">
        <h2>Prodcutos de componentes/piesas</h2>
        <div class="products">
          <!-- Producto 1 de Componentes -->
          <div class="product-card">
                <img src="data:image/jpeg;base64,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" alt="Placa Base ASUS">
                <h3>Placa Base ASUS</h3>
                <p>Desde $200 - Placa base para PC con chipset Z490 y soporte para PCIe 4.0.</p>
                <div class="cta">
                    <button onclick="addToCart('Placa Base ASUS', 200, 'data:image/jpeg;base64,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')">Añadir al Carrito</button>
                </div>
            </div>
            <div class="product-card">
        <img src="https://www.amd.com/content/dam/amd/en/images/products/processors/ryzen/2505503-ryzen-9-5900x.jpg" alt="Procesador AMD Ryzen 9 5900X">
        <h3>Procesador AMD Ryzen 9 5900X</h3>
        <p>Desde $549 - Rendimiento excepcional para gaming y creación de contenido.</p>
        <div class="cta">
            <button onclick="addToCart('Procesador AMD Ryzen 9 5900X', 549, 'https://www.amd.com/content/dam/amd/en/images/products/processors/ryzen/2505503-ryzen-9-5900x.jpg')">Añadir al Carrito</button>
        </div>
    </div>
    <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/71CPFiLxiQL.jpg" alt="Tarjeta gráfica NVIDIA GeForce RTX 3080">
        <h3>Tarjeta gráfica NVIDIA GeForce RTX 3080</h3>
        <p>Desde $799 - Experiencia visual de última generación.</p>
        <div class="cta">
            <button onclick="addToCart('Tarjeta gráfica NVIDIA GeForce RTX 3080', 799, 'https://m.media-amazon.com/images/I/71CPFiLxiQL.jpg')">Añadir al Carrito</button>
        </div>
    </div>
    <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/91SrsjQ151L._AC_UF894,1000_QL80_.jpg" alt="Memoria RAM Corsair Vengeance RGB 16GB">
        <h3>Memoria RAM Corsair Vengeance RGB 16GB</h3>
        <p>Desde $89 - Estilo y velocidad con iluminación RGB.</p>
        <div class="cta">
            <button onclick="addToCart('Memoria RAM Corsair Vengeance RGB 16GB', 89, 'https://m.media-amazon.com/images/I/91SrsjQ151L._AC_UF894,1000_QL80_.jpg')">Añadir al Carrito</button>
        </div>
    </div>
    <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/61LFWIjO6lL.jpg" alt="Disco SSD Samsung 970 EVO 1TB">
        <h3>Disco SSD Samsung 970 EVO 1TB</h3>
        <p>Desde $139 - Almacenamiento veloz y confiable.</p>
        <div class="cta">
            <button onclick="addToCart('Disco SSD Samsung 970 EVO 1TB', 139, 'https://m.media-amazon.com/images/I/61LFWIjO6lL.jpg')">Añadir al Carrito</button>
        </div>
    </div>
    <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/81x069mwcbL.jpg" alt="Placa base ASUS ROG Strix B550-F Gaming">
        <h3>Placa base ASUS ROG Strix B550-F Gaming</h3>
        <p>Desde $179 - Ideal para sistemas de alto rendimiento.</p>
        <div class="cta">
            <button onclick="addToCart('Placa base ASUS ROG Strix B550-F Gaming', 179, 'https://m.media-amazon.com/images/I/81x069mwcbL.jpg')">Añadir al Carrito</button>
        </div>
    </div>
    <div class="product-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDAnTr3srwS4EI--kvNDLsrsgoxS-5X1r2Fw&s" alt="Fuente de poder EVGA 750W">
        <h3>Fuente de poder EVGA 750W</h3>
        <p>Desde $99 - Energía eficiente y confiable.</p>
        <div class="cta">
            <button onclick="addToCart('Fuente de poder EVGA 750W', 99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDAnTr3srwS4EI--kvNDLsrsgoxS-5X1r2Fw&s')">Añadir al Carrito</button>
        </div>
    </div>
    <div class="product-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb2mz5L2nA91az3OZNrboxmKlfOWvvk0FJKg&s" alt="Disipador de CPU Cooler Master Hyper 212">
        <h3>Disipador de CPU Cooler Master Hyper 212</h3>
        <p>Desde $49 - Enfriamiento eficiente y silencioso.</p>
        <div class="cta">
            <button onclick="addToCart('Disipador de CPU Cooler Master Hyper 212', 49, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb2mz5L2nA91az3OZNrboxmKlfOWvvk0FJKg&s')">Añadir al Carrito</button>
        </div>
    </div>
    <div class="product-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4hJeIG9qeFC80ZFxwmJ_clFVyXsF4g1cs0A&s" alt="Gabinete NZXT H510">
        <h3>Gabinete NZXT H510</h3>
        <p>Desde $99 - Diseño moderno y compacto.</p>
        <div class="cta">
            <button onclick="addToCart('Gabinete NZXT H510', 99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4hJeIG9qeFC80ZFxwmJ_clFVyXsF4g1cs0A&s')">Añadir al Carrito</button>
        </div>
    </div>
    <div class="product-card">
        <img src="https://d287ku8w5owj51.cloudfront.net/images/products/hero/others/hero-sound-blasterx-ae-5-plus.jpg?width=800&height=800" alt="Tarjeta de sonido Creative Sound BlasterX AE-5 Plus">
        <h3>Tarjeta de sonido Creative Sound BlasterX AE-5 Plus</h3>
        <p>Desde $149 - Experiencia de audio premium.</p>
        <div class="cta">
            <button onclick="addToCart('Tarjeta de sonido Creative Sound BlasterX AE-5 Plus', 149, 'https://d287ku8w5owj51.cloudfront.net/images/products/hero/others/hero-sound-blasterx-ae-5-plus.jpg?width=800&height=800')">Añadir al Carrito</button>
        </div>
    </div>
    <div class="product-card">
        <img src="https://m.media-amazon.com/images/I/71YMN+ZF7VL._AC_UF894,1000_QL80_.jpg" alt="Cables SATA III (paquete de 3)">
        <h3>Cables SATA III (paquete de 3)</h3>
        <p>Desde $9.99 - Conexiones rápidas y confiables.</p>
        <div class="cta">
            <button onclick="addToCart('Cables SATA III (paquete de 3)', 9.99, 'https://m.media-amazon.com/images/I/71YMN+ZF7VL._AC_UF894,1000_QL80_.jpg')">Añadir al Carrito</button>
        </div>
    </div>

    <div class="product-card">
    <img src="https://dlcdnwebimgs.asus.com/gain/A5F4A546-2784-48CE-989A-56CA51CCB6C8/w717/h525" alt="Monitor ASUS ROG Swift PG259QN">
    <h3>Monitor ASUS ROG Swift PG259QN</h3>
    <p>Desde $699 - Diseñado para la máxima velocidad en gaming competitivo.</p>
    <div class="cta">
        <button onclick="addToCart('Monitor ASUS ROG Swift PG259QN', 699, 'https://dlcdnwebimgs.asus.com/gain/A5F4A546-2784-48CE-989A-56CA51CCB6C8/w717/h525')">Añadir al Carrito</button>
    </div>
</div>
   
                    <!-- Más productos de Gamer aquí -->
                </div>
            </div>

        <!-- Agrega más productos aquí -->
    </section>

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






