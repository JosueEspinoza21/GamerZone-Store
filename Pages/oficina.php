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
    background-image: url('../SRC/IMG/BannerOficina.png'); /* Ruta de la imagen */
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
        <h2>Productos de Oficina</h2>
        <div class="products">
          
           <!-- Producto 1 de Oficina -->
           <div class="product-card">
                <img src="https://www.xtremepc.com.mx/cdn/shop/files/8510d6f4-20a4-4b77-8ee1-baf4a5a0067c_800x.png?v=1719250626" alt="PC Oficina">
                <h3>PC Oficina</h3>
                <p>Desde $600 - Computadora para tareas de oficina, procesador Intel i5.</p>
                <div class="cta">
                    <button onclick="addToCart('PC Oficina', 600, 'https://www.xtremepc.com.mx/cdn/shop/files/8510d6f4-20a4-4b77-8ee1-baf4a5a0067c_800x.png?v=1719250626')">Añadir al Carrito</button>
                </div>
            </div>

            <div class="product-card">
            <img src="https://th.bing.com/th/id/R.0c1958ea794b660a5802265a1ec9c4a2?rik=Qombie1XI6w%2fGQ&riu=http%3a%2f%2fwww.bhphotovideo.com%2fimages%2fimages2000x2000%2fDell_I620_229NBK_Inspiron_620_Desktop_Computer_800221.jpg&ehk=G1%2bGiFKz4%2b6i4WC45eq88O9bHiy0bLVrp4mazHh9IYE%3d&risl=&pid=ImgRaw&r=0" alt="PC Oficina">
            <h3>PC Oficina</h3>
            <p>Desde $600 - Computadora para tareas de oficina, procesador Intel i5.</p>
            <div class="cta">
                <button onclick="addToCart('PC Oficina', 600, 'https://th.bing.com/th/id/R.0c1958ea794b660a5802265a1ec9c4a2?rik=Qombie1XI6w%2fGQ&riu=http%3a%2f%2fwww.bhphotovideo.com%2fimages%2fimages2000x2000%2fDell_I620_229NBK_Inspiron_620_Desktop_Computer_800221.jpg&ehk=G1%2bGiFKz4%2b6i4WC45eq88O9bHiy0bLVrp4mazHh9IYE%3d&risl=&pid=ImgRaw&r=0')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="product-card">
            <img src="https://th.bing.com/th/id/R.0c1958ea794b660a5802265a1ec9c4a2?rik=Qombie1XI6w%2fGQ&riu=http%3a%2f%2fwww.bhphotovideo.com%2fimages%2fimages2000x2000%2fDell_I620_229NBK_Inspiron_620_Desktop_Computer_800221.jpg&ehk=G1%2bGiFKz4%2b6i4WC45eq88O9bHiy0bLVrp4mazHh9IYE%3d&risl=&pid=ImgRaw&r=0" alt="PC Dell Inspiron">
            <h3>PC Dell Inspiron</h3>
            <p>Desde $750 - Excelente rendimiento para oficinas, procesador Intel i7.</p>
            <div class="cta">
                <button onclick="addToCart('PC Dell Inspiron', 750, 'https://th.bing.com/th/id/R.0c1958ea794b660a5802265a1ec9c4a2?rik=Qombie1XI6w%2fGQ&riu=http%3a%2f%2fwww.bhphotovideo.com%2fimages%2fimages2000x2000%2fDell_I620_229NBK_Inspiron_620_Desktop_Computer_800221.jpg&ehk=G1%2bGiFKz4%2b6i4WC45eq88O9bHiy0bLVrp4mazHh9IYE%3d&risl=&pid=ImgRaw&r=0')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 3 -->
        <div class="product-card">
            <img src="https://honduras.solutekla.com/photo/1/lenovo/computadores/thinkcentre_m73_sff_intel_corei7_4790_8gb_1tb_unidad_optica_sff_win_81_sl/thinkcentre_m73_sff_intel_corei7_4790_8gb_1tb_unidad_optica_sff_win_81_sl_0001" alt="Lenovo ThinkCentre">
            <h3>Lenovo ThinkCentre</h3>
            <p>Desde $680 - Compacta y potente, ideal para pequeños espacios.</p>
            <div class="cta">
                <button onclick="addToCart('Lenovo ThinkCentre', 680, 'https://honduras.solutekla.com/photo/1/lenovo/computadores/thinkcentre_m73_sff_intel_corei7_4790_8gb_1tb_unidad_optica_sff_win_81_sl/thinkcentre_m73_sff_intel_corei7_4790_8gb_1tb_unidad_optica_sff_win_81_sl_0001')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 4 -->
        <div class="product-card">
            <img src="https://honduras.solutekla.com/photo/1/hp/computadores/hp_sff_core_i34160_dual_core_36_ghz/hp_sff_core_i34160_dual_core_36_ghz_0001" alt="HP ProDesk 400">
            <h3>HP ProDesk 400</h3>
            <p>Desde $720 - Computadora para trabajo constante con alta durabilidad.</p>
            <div class="cta">
                <button onclick="addToCart('HP ProDesk 400', 720, 'https://honduras.solutekla.com/photo/1/hp/computadores/hp_sff_core_i34160_dual_core_36_ghz/hp_sff_core_i34160_dual_core_36_ghz_0001')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 5 -->
        <div class="product-card">
            <img src="https://m.media-amazon.com/images/I/61UgXsi+mcL._AC_SL1500_.jpg" alt="Acer Aspire TC">
            <h3>Acer Aspire TC</h3>
            <p>Desde $590 - Ideal para trabajos básicos en oficina.</p>
            <div class="cta">
                <button onclick="addToCart('Acer Aspire TC', 590, 'https://m.media-amazon.com/images/I/61UgXsi+mcL._AC_SL1500_.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 6 -->
        <div class="product-card">
            <img src="https://m.media-amazon.com/images/I/71hDz+sqN7L.jpg" alt="Office Desktop">
            <h3>Office Desktop</h3>
            <p>Desde $620 - Optimizada para tareas administrativas.</p>
            <div class="cta">
                <button onclick="addToCart('Office Desktop', 620, 'https://m.media-amazon.com/images/I/71hDz+sqN7L.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 7 -->
        <div class="product-card">
            <img src="https://microless.com/cdn/products/0e2da55c9f2870f8b3cc88105ab01a5f-hi.jpg" alt="Office PC Premium">
            <h3>Office PC Premium</h3>
            <p>Desde $820 - Rendimiento superior para oficinas exigentes.</p>
            <div class="cta">
                <button onclick="addToCart('Office PC Premium', 820, 'https://microless.com/cdn/products/0e2da55c9f2870f8b3cc88105ab01a5f-hi.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 8 -->
        <div class="product-card">
            <img src="https://m.media-amazon.com/images/I/71F4IyuPVXL._AC_UF894,1000_QL80_.jpg" alt="HP Pavilion Office">
            <h3>HP Pavilion Office</h3>
            <p>Desde $770 - Ideal para multitarea y reuniones virtuales.</p>
            <div class="cta">
                <button onclick="addToCart('HP Pavilion Office', 770, 'https://m.media-amazon.com/images/I/71F4IyuPVXL._AC_UF894,1000_QL80_.jpg')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 9 -->
        <div class="product-card">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QEBIQDxAVFRUQEBYXFhAQEBUVFREVFRYWFhYWFRUYHCggGRsnHhUVITEhJSotLi4uFx8zODMtNyguLisBCgoKDg0OGgwPGi0dHR41NC03Ky0tListKyswMDg4OC0rLSstKzAtKy8tNy0rKysrLS0rKysrKys3LS0tNTUtLf/AABEIASQArAMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAwIEBQYHAQj/xABHEAABAwIDAwYJCwMDAwUAAAABAAIDBBESITEFQbETM1FhcYEGByIycnN0s8EIIyQ0QlJikaHR8BSC8RVE4ZLC0kNTY5Sy/8QAFgEBAQEAAAAAAAAAAAAAAAAAAAIB/8QAGREBAQADAQAAAAAAAAAAAAAAAAECEVEh/9oADAMBAAIRAxEAPwDuKIiAiIgIiICIhKAvHEAXOQG87lpXhJ4yaKlvHB9JlGWGJ3zbT+KTTubfuXMNv+FFdXkiolwxn/bxXbH/AHDV/wDcT3IOm+EnjLo6a7Kf6TIMvmzaJp/FJv8A7b9y5Lt3w32jVykyVDmNaSBFA50bG9zTd3a4lWuEAZdI4hYSU/Ov9N3FBn4dt1m6rqB2VMv/AJK7j8IK8aVtT/8AZlP/AHLBUwxA9Ddes2vbqyt+a2Xw5ooqaohZAzADRwvcMTiHPcHXJxE2vlp+uiCSLwp2kNK2bvffirOTxnbRje5nLznCSL4IiDbouFZQPDgCN4utZr6GSeqeyJtyLXOgb1uO5BvMXjdrm+dNMPSggPwXYfAPwn/1CDE62JoacTQQHteCWusdDkbj97L5plFJTMcwWqJnMLcZ5qG4scI+07P9Ny7X4jT9HPs8P/eg6iiIgIiICIiAiIgItP8AC3xiUOz3OiuZp26wRfYJFxyjzkzUZZnMZLkvhH4cbQ2hdsknJRH/AG8BLWkdD3ec/vy6gg6t4TeMmhpLxxH+omGXJwuGBp/HLmB2C5HQuW+EPhdX7QuJpcER/wBvDdrLfjOr+826gtdjaBop2oKo2gaKUKhqtq6oe2N7m5YWkjeSgvXad44hYGbnX+m7iq9hVskjnh7iQMNr7s1RNzr/AE3cUGQoiAHA6OIN+uwbb9B+qudp1kszg6Z7nuDQ0F2Zwt81oVnTOI0V00DoA7ABwQV0jC1oB1tn26la5XRTPqJYoMR5QjG1psDa/nHcM9/StnYtYrnTColjgxXlIxBmptffuGeuSCuSlpaVrhIRNOWkBjD83CSLXcftOHR+m9dr8Rn1c+zw8Xrib9nU9Mx39Q7HMWHDTxnKMkZOkcOi4NuK7Z4i/q59nh4vQdSREQEREBERAREQfK+2HE1VSTmXVUxJ6SZHElRMVO26hrZ6h+oNRLYjQ3e4ix35L2B1wD0i6CdqnaoWKZqCRqsqjZfKOu+V2H7gsB+e9XzVWEENPSRxNsxoGY7TmNSsNPzr/TdxWwO07xxC1+fnZPWO4oLynV+5oFrODrtBuARYkXLe7RWECu2oL9sTeTxeVfpyw+cRhv02zstQramaOomZATeYgHALvNr5NtmNdy2Zi1qsrZYZ5hEbOlIGLDdw1yZ2/BAdsqKBjnVb/nHNJZTxuu65GTpHbhfP4nRds8RfMH2eHi9cTOyRGx0tZIWuc0lkIOKWR1si/oF7X+C7Z4i+YPs8PF6DqaIiAiIgIiICpe24I6RbLrVSIPkWvoHiR8DnjDFI5l2jN2Bxbfq0061eQtsABuCl2r9ZqPaZfeOUbEE7FM1QsUzUErVWFQ1VhBU7TvHELXajnZPWO4rYXad44ha9Uc7J6buKCWWQtZcX36amzS6w7bK22RXPe7PpAIBcQQ640cTYjW/RdZCC28XHRnxGY7lcRQRtN2tN883EZX1sGgDvIJ1zzKDINgGDFizDQ46Wzdhw+lvt0LVKuvfT1ExYG4n2Ae4XMYzvh6zl+S2RhOm7oWuVVcYKiZ4Y1zzbA9+fJa3IHTogp/0t+B1RWSFmJpwtdnLK63kix0F7a/kNV2zxFcw72eHi9cS/0+aVjqmqkwNwmzpPPkNrhrGbgf8AAK7b4iuYd7PDxeg6oiIgIiICIiAiIg+VtrfWaj2mX3jlGxSbW+s1HtMvvHKNiCdimaoGKZqCVqkCjaqwgqdp3jiFrtRzsnpu4rYXad44ha9Pzsnpu4oJZJcDb9umuTS7L8lBsqvc92fSARiLgQ64GuYINuq11ewW3i4/L8juU1PSxszaD/dhyOhIDWtF7G1zfqsgyf8ASuDBJcWyyuAc+gHXu+BtqtTVthqJXujD33HJl/ms1uSN50t8FsTVrtTURx1ErpY+UcCOTafMGty7p3IKDTVFS19TO/CxrSeUkyDt4bG3fc2GX6ldt8RPMO9nh4vXEnMqqsOmkdaONpOJ3kxtsPNYN53cSu2+InmHezw8XoOqoiICIiAiIgIiIPlXa31mo9pl945RsVe1vrNR7TL7xyjYgnapmqBqmagmaqwomqQIKnad44ha9Pzsnpu4rPuOXeOIWAn51/pu4oLyn/llc4wCATYu0ByJ7L6rE1wvERnq3QXOqCFrZKfCfOjjcRnqQ+5z6fgqmO5bxm/dM61a7UyQtqJXTsL8NsEYNmuOfnno0/PQrZxTkRiS4sXYbZ3vn+x/l1rFSYBUSuqA4hpGGNmXKHPU7gO7VS1TI+qrA51gI4mk282KMNF7Dpdb+ALtniI5l/s8PGRcTlqairBaxmGKJpPJs8mNgaL+Ud5/gC7X4h+Zf7PDxkQdXREQEREBERAREQfKe1vrNR7TL7xyjYq9rfWqj2mb3jlE1BcNUrVC0qVqCZpVYKiBVYKCtxy7xxCwE/Ov9M8VnXHLvHELAz86/wBM8UFVWfm+8aOw7+lVSD5ymNxzMQ/ISfupWRseMMjcTTuDi3szCnbSQ3Dg1922sTKXAWvYWI0zKqZaxs6yz2VlBOORawXvyhcczYZAZDT/AAtWqWwmeV07iGstZjPOkOeQO4ZfrqFn2LAVMUT55TNJgawjIC7pL3yb+SlqmaumnBigjwRMaSYo9A0Zl0jt+m/XrK7Z4h+Zf6iHjIuJzbRfI0wU0eCPCSWMzc4AZukd0W/yV2vxDcy/1EPGRB1hERAREQEREBERB8o7W+tVHtM3vHKJik2t9aqPaZveOULCguGlStKgYVK0oJmlSAqEFVgoK3HiOIWCm51/pnis248RxWDm5x/pniguRM1jcTjYDfYngq46+Mua0XJd+Fw1BIPlAZZHRWdZze7Ua6aquS3KU2X/AKMWfdJl+h/NVMd428Zb7pmGFYCpp2STymSQRsjtiJzc697Bo3nIraOSZyAePO5TCczpYnS3YtXqKQSzyEvaxsdsT3br3tYbzkpa8m2l5JgpYyxjgcRAvJIAMy47ha//ABou1eIXmZPUQ8ZFxWXaLGNdDSsIDwQ6VwvJIN4/CP5ku1eIXmpPUQ8ZEHWUREBERAREQEREHydtc/Sqn2mb3jlEwqva5+lVPtM3vHKJhQTtKlaVA0qVpQTAqsFRAqoFBI48RxWEm5x/pnisw48RxWGl5x/pnigqrH2jve2YzHavOWY6SDCblscYNiCAQH5dv7hXlJKWm7dewH9Crt87nWxYTbQ8my47Da4VTLUs6zXu0/8AUEsEe4OJ7ytdqaQzTyWIa1li57zYN1z696zjVgqmkfNPI1lrAguc42a3XM/qpa9kroYWujphcuaWuqHjynA6hg3D+Z6rtPiE5qT1EPGRcWfUwQNcyDy3uaQ6dwyAOREY+PFdo8QfNS+oh4yIOtoiICIiAiIgIiIPkva5+lVPtM3vHKFhUm1z9KqfapveuULSgnaVK0qBpUjSgnBVQKiBVYKCtx4jisPMfnHemfisqTxHFYozYJg+wOGa9nC4NiTYjeMkFzCT1fmf2Vw1zugf9R/ZXsPhKxpa4QR4m6vc0uc8jQuda5NrXO83PUvZPCFj22dFEXf+7gcH6g3uNDl+p35oLVrj0D/q/wCFhqmnklmeyMa2xZ2aLaFx71t7fC4Z3jj8o38119ScujX87netPqmySTPZDc8pbEG5A+l0DNBU58EDXNZaWUtIMh8yO4scA3nr/wALtHiD5uX1EPGRcXfHBA1wNpZS0j/44r5d7v5ku0eILm5fUQcZEHXEREBERAREQEREHyPtc/Sqn2qb3r1C0qTa5+lVPtU/vXqFpQTtKkaVA0qVpQSgqsFRAqoFBITxHFYWuOb/AEz8VlyeI4rD1pzceh/xKCmno3EYpH4GdLjmewfzvVVY5mFnI4gLkZk4nZ6qllPJN5b3YWj7b9APwhVTPbHyb4CcsQDnbzmCbd6CtlGGDHUvLRuiafLd+w/mSpmL+UcyAEcoBdrdbC9gTuGaNoyfnal5aD05vf2Dd/MklkeyRzILjlA0WGbrC9gDrvQVupoYGkSEPlLSBG0+THcauO89X+V2jxA83N6iDjIuLGjjhaTObyFpwwtPmk6Oe4fztXaPED5k3qIOMiDryIiAiIgIiICIiD5D2ufpVT7VP716gaVLtg/Sqn2qb3r1A0oJ2lSNKhaVWCgmBVQKiBVYKCsn4cViazVx6H/ErJk/DisXV6u6n34oDWSzm5Pkj7Rya3s6VVK5sXJvidiw4vKcMr5gkDo/ZUAyzmw80btGt7VVLhiLHNIkw3183Fnp1D4IPW0z5PnZ34W/edqeprf53pLO6J7hDfywADa7rZ5DrKoa185xySANH23HIdTRvVb6kxPfyeZcAA9wuQOrrOSCo0TY2l9Q7ynA4YgbuJtk553D+dS7R4gPMn9RBxkXFv6KzTLUOILgS1mr3m2V76DT/hdp+T/5k/qIOMqDr6IiAiIgIiICIiD5A2yfpVT7VN716tmlT7a+t1PtU3vXK2aUE7SpAVACpAUEoKqBUYK9BQSE/DisbVau9P8AdX5Kx9Tq70v3QVxmaoc2GFhOIhrY4xqXGwHeTZbZUSUWxiIeQiraxlxLLN5dNSSb4ootJHtPnPdoRYbwIfF9UkTVNQxoBodnzzRN3GbyYoi7psZL9yu6fwAMnJMjqhPVyUbKv+hdE5heyS17Tl5a5wJ32vYoLam8Ptsym5mi5IasfSU/I4fu4eTuR396uoI6TaJkFHTxU+0GMLmRRAinrWtF3chGT8zLYEhoyNus2u6nxb1MskEYqW4HseXmOIlsZjZI8ujbcGSEFrI+UOEYnjCCFrEUBoqen2nHIHyOqnsjGGwidThj8d8XlXLtLDTXNBihSuc0zTvLQQbX855tkANwXafk/wDmz+og4yrm3jB2a0bSq3g4IiWytDjfOeJk+Bg6LyEdAXSPk/ebUepg4yoOwoiICIiAiIgIiIPj3bZ+l1XtU3vXK1aVcbcP0uq9qm965WoKCZpVYKhBVYKCYFVAqIFVAoJCVYVG/wBJXhKsp9/pfog2jwAqmPqZaIWjFfRzUzHk6TPDXxOcfTja3+5S1HhhWwMjp3xQwSQ0zaZ1RBG9tWI4chEZS84TdueEDuWqCqw+TCC0/fHnk7rEaLbqiuodo4DtR7qSrDRirI4+UhqgMgaiNnlMlsB5bcjv3ABW3xl7VlljewRXj88cnYVPkOjaaotIx2a42AsL52uqtnbbmrnjZbaKi+elIj5OlIbT42BsszLvOHC1mK/4VC/wXjd5I2vs5kI15GaWWUjp5JsYcT1ZdpVFRtuioI5abZ7ZJJJmYJq+ZoY+Zh1ihjueSiNhe93O0OiCx8M6kVtfV1MZtAH4Y3E5OZExsTCwb8QjB710/wCT7pUepg4yri7hLOC8mzGA9TRYaAbyuz/J90qfUwcZUHY0REBERAREQFS91gT0C+XUqkQfGdbUCWSSfTlZHPwa4cbi6199r6qJpU+3GAVdSGgACpmAAFgAJHWACtmoJgVWCogVUCglBVQKiBVRdbXLtQSEq0m3+kri6tpd/pIJBUtZlEM/vnXuR7D5HK3ANySdUEzI/MF3ffO7sCPBdg5Q2vclx6OxB66pJ+bhbhB6POd1kr12APcZRfCBZg3nrPQvDU28iBpF/tfacvXBmNxluMIHkjV3egOfLMDYWYwE2GTW2F+8rs/yfNKn1MHGVcYfLJKC1jbMaCcIyAAzzO8rs3ye/wDc+pg4yoOyoiICIiAi8XhJQVIoXOKsq+pkY27dTpcIPkrwhaRWVQIsRVzAg7jyrlZArsvht4CGtlfUtwslfm5zG2Eh6XNva/WLErmu1fBKtpicUeID7TM/0QYcFVgqEmxsQQRuIsR3KsFBKCvXVT7EHo1UYK9ugogcblH7+sqRRu39ZQSB7I9Bid0nQL15MmDGbXucR0svBycevlO6NwR7jJhByJvmcgAEFRqGs8mEZnLGRmexHNaXkykgNAy+05ecs2PKIXd98/AfzvXrmBzyXnCGgXvqexAfO+QFkbcLACcI6BvcV2b5PX+69TBxlXGX1BcCyJtm2N7akDUuK7L8nnWq9TBxlQdnREQEREBeWXqIKSFDURXCuF4QgxE1EDuWNqtltdqLrZnMUT4Qg5ptvwHpZ744hfpAzWgbZ8WMjLup33/C7919BS0t1Yz0AO5B8sbQ2PVU5tLE4W+0BcfmFZNkC+n67YrHghzAe0LS9ueLmmmuWswO6W5IOLXVDj+pW37X8XdXDcxHGOjQrVKullhNpY3M9JuX56IDWsZm7yj90ad69lcZMI017AFGwuOgcexpKkEUp0ZIeyJyCoPbH5gxO+8RkOxeOZjeS42AAud57FI2jqDpDMeyB/7KtuzKs6U1Qeynf+yCKSezS2Npa0jMkZu7SuyfJ5OdX6mD/wDUq5RT+D1fKcLaOpcTu5B44tXdvFB4J1Gz4JZKluGSowDkrg8myPFbERliJebgaADrQdIuvVECVWCgqReIg9REQEREBERBSWqh0alRBbPhCt5KUdCyFlSWoMPJRDoUZ2aw6tB7QFmTGvOSQYgbNZ90fkFUKBv3R+SyvJr3k0GL/om9C9FEOhZPk05NBj2U1jcbllbKPApUHll6iICIiAiIgIiICIiAiIgIiIPLJZEQe2Xll6iAiIgIiICIiAiIg//Z" alt="Dell OptiPlex 3080">
            <h3>Dell OptiPlex 3080</h3>
            <p>Desde $840 - Ideal para tareas intensivas en oficina.</p>
            <div class="cta">
                <button onclick="addToCart('Dell OptiPlex 3080', 840, 'data:image/jpeg;base64,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')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 10 -->
        <div class="product-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsBLktVTywIsmgh1lLNdwgB91L45T7RsRc_A&s" alt="Asus ExpertCenter">
            <h3>Asus ExpertCenter</h3>
            <p>Desde $880 - Compacto, rápido y silencioso.</p>
            <div class="cta">
                <button onclick="addToCart('Asus ExpertCenter', 880, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsBLktVTywIsmgh1lLNdwgB91L45T7RsRc_A&s')">Añadir al Carrito</button>
            </div>
        </div>
        <!-- Producto 11 -->
        <div class="product-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSggs9ApQHQDQoAz0QAOWzoUSpyZtJIWqLDPw&s" alt="HP Pavilion TG01">
            <h3>HP Pavilion TG01</h3>
            <p>Desde $670 - Ideal para oficinas que necesitan diseño y funcionalidad.</p>
            <div class="cta">
                <button onclick="addToCart('HP Pavilion TG01', 670, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSggs9ApQHQDQoAz0QAOWzoUSpyZtJIWqLDPw&s')">Añadir al Carrito</button>
            </div>
            
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






