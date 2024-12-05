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

    .banner {
        background-image: url('banner_image.jpg');
        background-size: cover;
        background-position: center;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-align: center;
        font-size: 30px;
        padding-top: 0;
        margin-bottom: 0;
    }

    .banner h2 {
        background-color:  rgb(91, 173, 131);
        padding: 10px;
        border-radius: 0px;
        width: 100%;
        text-align: center;
        font-size: 25px;
        margin-top: 50px;
    }

    .products {
        display: flex; /* Cambiado de grid a flex */
        flex-wrap: wrap; /* Permite que los productos se acomoden en varias filas */
        justify-content: center; /* Centra los productos horizontalmente */
        gap: 40px; /* Espaciado considerable entre productos */
        padding: 20px;
    }

    .product-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 20px;
        width: 250px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card img {
        width: 130px;
        height: 130px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .product-card img:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .product-card h3 {
        font-size: 1.2em;
        font-weight: bold;
        margin: 10px 0;
        text-align: center; /* Centrado del título */
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

    .dropdown {
        position: relative;
        display: inline-block;

    }
    /* letra y tamaño de categoria  */
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
        transform: scale(1.2);
        box-shadow: 0 4px 10px rgba(255, 255, 255, 0.5);
    }
    h2 {
        text-align: center; /* Centra el texto horizontalmente */
        font-size: 2em; /* Ajusta el tamaño del texto */
        margin-bottom: 20px; /* Espacio debajo del título */
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
        <a href="laptop.php">Laptops</a>
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


    <!-- Banner de productos -->
    <div class="banner">
        <h2>PRODUCTOS DISPONIBLES</h2>
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

        <div class="product-card">
            <img src="https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/desktops/alienware-desktops/alienware-aurora-r15-intel/media-gallery/lunar-light-wh-clear-cryo-tech/desktop-alienware-aurora-r15-white-cryo-clear-panel-gallery-1.psd?fmt=pjpg&pscan=auto&scl=1&wid=3398&hei=3941&qlt=100,1&resMode=sharp2&size=3398,3941&chrss=full&imwidth=5000" alt="PC Gamer Alienware Aurora R15">
            <h3>PC Gamer Alienware Aurora R15</h3>
            <p>Desde $3,499 - Potencia extrema con RTX 4090 y procesador Intel Core i9 de 13.ª generación.</p>
            <div class="cta">
                <button onclick="addToCart('PC Gamer Alienware Aurora R15', 3499, 'https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/desktops/alienware-desktops/alienware-aurora-r15-intel/media-gallery/lunar-light-wh-clear-cryo-tech/desktop-alienware-aurora-r15-white-cryo-clear-panel-gallery-1.psd?fmt=pjpg&pscan=auto&scl=1&wid=3398&hei=3941&qlt=100,1&resMode=sharp2&size=3398,3941&chrss=full&imwidth=5000')">Añadir al Carrito</button>
            </div>
        </div>
                    <!-- Más productos de Gamer aquí -->
                </div>
            </div>

    <!-- Categoría Oficina -->
    <div class="product-category oficina">
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
            <img src="data:image/jpeg;base64,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" alt="Dell OptiPlex 3080">
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

    <!-- Categoría Laptops -->
<div class="product-category laptops">
    <h2>Laptops</h2>
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
        
        
        <!-- Categoría Componentes -->
    <div class="product-category componentes">
        <h2>Componentes</h2>
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

        </div>
    </div>
</section>

        <!-- Agrega más productos aquí -->
    </section>

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

// Cerrar el menú desplegable si se hace clic fuera de él
window.onclick = function(event) {
    if (!event.target.closest('.dropdown')) {
        const dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
};

</script>

</body>

</html>






