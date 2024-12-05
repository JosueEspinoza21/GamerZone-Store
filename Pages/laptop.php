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
    background-image: url('../SRC/IMG/BannerLaptop.png'); /* Ruta de la imagen */
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
        <a href="Nosotros.php">Nosotros</a>
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
        <h2>Productos portatiles</h2>
        <div class="products">
          <!-- Producto 1 -->
        <div class="product-card">
            <img src="https://images-cdn.ubuy.co.in/633b58b324498b064f04ebba-asus-rog-strix-g15-2021-gaming-laptop.jpg" alt="ASUS ROG Strix G15">
            <h3>ASUS ROG Strix G15</h3>
            <p>Desde $1,500 - Laptop gamer con procesador AMD Ryzen 7 y tarjeta gráfica RTX 3060.</p>
            <div class="cta">
                <button onclick="addToCart('ASUS ROG Strix G15', 1500, 'https://images-cdn.ubuy.co.in/633b58b324498b064f04ebba-asus-rog-strix-g15-2021-gaming-laptop.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="product-card">
            <img src="https://m.media-amazon.com/images/I/61uCHVcsAvL._AC_SL1105_.jpg" alt="Dell XPS 13">
            <h3>Dell XPS 13</h3>
            <p>Desde $1,200 - Ultrabook premium con pantalla 4K y diseño ultradelgado.</p>
            <div class="cta">
                <button onclick="addToCart('Dell XPS 13', 1200, 'https://m.media-amazon.com/images/I/61uCHVcsAvL._AC_SL1105_.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 3 -->
        <div class="product-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_SLRcoF0tFDNW2mhmXiKoOEH-fWYvcxxT5w&s" alt="HP Pavilion Gaming 15">
            <h3>HP Pavilion Gaming 15</h3>
            <p>Desde $1,000 - Laptop gamer con pantalla de 144Hz y tarjeta gráfica GTX 1650.</p>
            <div class="cta">
                <button onclick="addToCart('HP Pavilion Gaming 15', 1000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_SLRcoF0tFDNW2mhmXiKoOEH-fWYvcxxT5w&s')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 4 -->
        <div class="product-card">
            <img src="https://i.ebayimg.com/images/g/EGUAAOSwSWhjxdjA/s-l1200.jpg" alt="Apple MacBook Pro 16">
            <h3>Apple MacBook Pro 16</h3>
            <p>Desde $2,500 - Potencia profesional con el chip M2 Pro y pantalla Retina.</p>
            <div class="cta">
                <button onclick="addToCart('Apple MacBook Pro 16', 2500, 'https://i.ebayimg.com/images/g/EGUAAOSwSWhjxdjA/s-l1200.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 5 -->
        <div class="product-card">
            <img src="https://p1-ofp.static.pub/medias/bWFzdGVyfHJvb3R8MzM4MDg3fGltYWdlL3BuZ3xoMGYvaGY3LzE0MDcwNjc0NzE4NzUwLnBuZ3xiMDUwZmMyMGMxODkxY2JkNTdhMjZmMWM1YWY1NWZmYTllMTg4Y2E1NGFjMjMzMjRkZjQ1YjA1ZjA3YTFjMThi/lenovo-laptop-thinkpad-x1-carbon-gen-9-14-subseries-hero.png" alt="Lenovo ThinkPad X1 Carbon">
            <h3>Lenovo ThinkPad X1 Carbon</h3>
            <p>Desde $1,400 - Laptop de oficina de alta gama, con diseño resistente y batería extendida.</p>
            <div class="cta">
                <button onclick="addToCart('Lenovo ThinkPad X1 Carbon', 1400, 'https://p1-ofp.static.pub/medias/bWFzdGVyfHJvb3R8MzM4MDg3fGltYWdlL3BuZ3xoMGYvaGY3LzE0MDcwNjc0NzE4NzUwLnBuZ3xiMDUwZmMyMGMxODkxY2JkNTdhMjZmMWM1YWY1NWZmYTllMTg4Y2E1NGFjMjMzMjRkZjQ1YjA1ZjA3YTFjMThi/lenovo-laptop-thinkpad-x1-carbon-gen-9-14-subseries-hero.png')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 6 -->
        <div class="product-card">
            <img src="https://asset.msi.com/resize/image/global/product/product_1619086146fdfbc8b34331ebecbf18cb444480b7d1.png62405b38c58fe0f07fcef2367d8a9ba1/600.png" alt="MSI Katana GF66">
            <h3>MSI Katana GF66</h3>
            <p>Desde $1,200 - Laptop gamer con Intel i7 y tarjeta gráfica RTX 3050 Ti.</p>
            <div class="cta">
                <button onclick="addToCart('MSI Katana GF66', 1200, 'https://asset.msi.com/resize/image/global/product/product_1619086146fdfbc8b34331ebecbf18cb444480b7d1.png62405b38c58fe0f07fcef2367d8a9ba1/600.png')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 7 -->
        <div class="product-card">
            <img src="https://pisces.bbystatic.com/image2/BestBuy_US/images/products/8ff12b3a-7ff1-4d19-8b68-fc2244faa18f.jpg" alt="Acer Aspire 5">
            <h3>Acer Aspire 5</h3>
            <p>Desde $650 - Laptop de oficina gama media con procesador Intel i5 y SSD de 256GB.</p>
            <div class="cta">
                <button onclick="addToCart('Acer Aspire 5', 650, 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/8ff12b3a-7ff1-4d19-8b68-fc2244faa18f.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 8 -->
        <div class="product-card">
            <img src="https://m.media-amazon.com/images/I/81+l7hSFLYL._AC_SL1500_.jpg" alt="Razer Blade 15">
            <h3>Razer Blade 15</h3>
            <p>Desde $2,200 - Laptop gamer ultra delgada con pantalla de 240Hz y RTX 3070.</p>
            <div class="cta">
                <button onclick="addToCart('Razer Blade 15', 2200, 'https://m.media-amazon.com/images/I/81+l7hSFLYL._AC_SL1500_.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 9 -->
        <div class="product-card">
            <img src="https://acosa.com.hn/wp-content/uploads/2022/03/KXVJ0-1.jpg" alt="Dell Latitude 5420">
            <h3>Dell Latitude 5420</h3>
            <p>Desde $1,100 - Laptop empresarial con opciones de conectividad avanzadas.</p>
            <div class="cta">
                <button onclick="addToCart('Dell Latitude 5420', 1100, 'https://acosa.com.hn/wp-content/uploads/2022/03/KXVJ0-1.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 10 -->
        <div class="product-card">
            <img src="https://images-cdn.ubuy.co.in/65da4430c3b3bb0907279ad7-asus-vivobook-15-laptop-15-6-display.jpg" alt="Asus VivoBook 15">
            <h3>Asus VivoBook 15</h3>
            <p>Desde $700 - Laptop de oficina con diseño estilizado y teclado retroiluminado.</p>
            <div class="cta">
                <button onclick="addToCart('Asus VivoBook 15', 700, 'https://images-cdn.ubuy.co.in/65da4430c3b3bb0907279ad7-asus-vivobook-15-laptop-15-6-display.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 11 -->
        <div class="product-card">
            <img src="https://www.lg.com/us/images/business/md08004501/gallery/D-02.jpg" alt="LG Gram 17">
            <h3>LG Gram 17</h3>
            <p>Desde $1,800 - Ligera, potente y con pantalla 17 pulgadas de alta resolución.</p>
            <div class="cta">
                <button onclick="addToCart('LG Gram 17', 1800, 'https://www.lg.com/us/images/business/md08004501/gallery/D-02.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 12 -->
        <div class="product-card">
            <img src="https://i5.walmartimages.com/seo/Microsoft-Surface-Laptop-4-13-5-Touch-Screen-AMD-Ryzen-5-Surface-Edition-8GB-Memory-256GB-Solid-State-Drive-Latest-Model-Platinum_f98ea0a2-7f2d-4b55-90fd-383027e8a97b.1c5d5e5b5c91f8f3edae9cc0551613ab.jpeg" alt="Microsoft Surface Laptop 4">
            <h3>Microsoft Surface Laptop 4</h3>
            <p>Desde $1,600 - Elegancia y funcionalidad, ideal para tareas de oficina avanzadas.</p>
            <div class="cta">
                <button onclick="addToCart('Microsoft Surface Laptop 4', 1600, 'https://i5.walmartimages.com/seo/Microsoft-Surface-Laptop-4-13-5-Touch-Screen-AMD-Ryzen-5-Surface-Edition-8GB-Memory-256GB-Solid-State-Drive-Latest-Model-Platinum_f98ea0a2-7f2d-4b55-90fd-383027e8a97b.1c5d5e5b5c91f8f3edae9cc0551613ab.jpeg')">Añadir al Carrito</button>
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






