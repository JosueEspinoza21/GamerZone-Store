<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerZone Store - Tienda</title>
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
            background-image: url('SRC/IMG/Carrito.png'); /* Cambia a la imagen del carrito */
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
      /* Estilos del banner */
.banner {
    background-image: url('banner.jpg');
    background-size: cover;
    background-position: center;
    height: 150px; /* Ajusta la altura para que no sea tan grande */
    display: flex;
    justify-content: center;
    align-items: flex-start; /* Alineación hacia arriba */
    color: white;
    text-align: center;
    font-size: 20px;
    padding-top: 0; /* Elimina el padding superior para reducir espacio */
}

.banner h2 {
    background-color: rgb(91, 173, 131); /* Gris semi-transparente */
    padding: 10px; /* Mantén el padding bajo para no aumentar el espacio dentro del título */
    border-radius: 0px; /* Bordes sin redondear */
    width: 100%;
    text-align: center;
    margin-top: 50px; /* Aumenta este valor para dar más espacio entre el banner y el título */
}

.bannerImagen {
    background-image: url('SRC/IMG/Banner2.png'); /* Ruta de la imagen */
    background-size: contain; /* Ajusta la imagen sin recortes */
    background-position: center top; /* Asegura que la imagen se ajuste desde la parte superior */
    background-repeat: no-repeat; /* Evita que la imagen se repita */
    height: 550px; /* Ajusta la altura según necesites */
    width: 100%;
    position: relative; /* Necesario para colocar el texto sobre la imagen */
}

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
        grid-template-columns: repeat(3, 1fr); /* Tres columnas */
        gap: 20px; /* Espaciado entre los productos */
        justify-items: center; /* Centrar los productos */
    }


    /* Estilo de las tarjetas de producto */
    .product-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 20px;
        width: 250px; /* Ajusta el tamaño de las tarjetas de producto */
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

    /* Botón de ver más productos */
    .cta {
        text-align: center;
        margin-top: 30px; /* Espacio arriba del botón */
    }

    .cta button {
        background-color: #66e8fc;
        color: black;
        padding: 15px 30px;
        font-size: 18px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .cta button:hover {
        background-color: #1f2833;
        color: white;
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


    /* Nueva sección de Categorías */
.categories-section {
    background-color: #f1f1f1;
    padding: 40px 20px;
    text-align: center;
}
.section-title {
    font-size: 25px;
    margin-bottom: 30px;
    color: #0b0c10;
}
.categories-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
/* Estilo inicial de la tarjeta */
.category-card {
    background-color: white;
    border-radius: 10px;
    width: 200px;
    margin: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Suaviza el efecto */
}

/* Efecto al pasar el mouse sobre la tarjeta */
.category-card:hover {
    transform: scale(1.05); /* Aumenta ligeramente el tamaño de la tarjeta */
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3); /* Agrega una sombra más intensa */
}

/* Animación de la imagen (opcional para hacerlo más destacado dentro del efecto general) */
.category-card:hover .category-icon {
    transform: scale(1.2); /* Aumenta el tamaño de la imagen */
    transition: transform 0.3s ease; /* Asegura que sea suave */
}

/* Estilo inicial de las imágenes */
.category-icon {
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin-bottom: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Suaviza la transformación */
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

<header>
    <img src="SRC/IMG/estan.png" alt="Logo GamerZone" class="logo">
    <h1>GamerZone Store</h1>
    <div class="user-options">
        <a href="Pages/login.php">Iniciar Sesión</a>
        <a href="Pages/registro.php">Registrarse</a>
        <div class="cart-container" onclick="window.location.href='Pages/carrito.php'">
            <span id="cart-badge" class="cart-badge">0</span>
            <img src="SRC/IMG/Carrito.png" class="cart-icon">
        </div>
    </div>
</header>

<nav class="main-nav">
    <div class="dropdown">
        <button class="dropdown-button" onclick="toggleDropdown()">Categorías</button>
        <div id="dropdown-content" class="dropdown-content">
            <a href="Pages/gaming.php">Gaming</a>
            <a href="Pages/oficina.php">Oficina</a>
            <a href="Pages/laptop.php">laptops</a>
            <a href="Pages/componentes.php">Componentes</a>
        </div>
    </div>
    <a href="index.php">Inicio</a>
    <a href="Pages/productos.php">Productos</a>
    <a href="Pages/servicios.php">Servicios</a>
    <a href="Pages/contacto.php">Contacto</a>
    <a href="pages/Nosotros.php">Nosotros</a>
</nav>

<div class="bannerImagen"></div>

<div class="banner">
    <h2>Construye tu PC con los mejores componentes</h2>
</div>

<section class="categories-section">
    <h2 class="section-title">Comprar por Categorías</h2>
    <div class="categories-container">
        <div class="category-card">
            <img src="https://www.laptopoutlet.hn/_next/image?url=https%3A%2F%2Fstorage.googleapis.com%2Flaptopoutlet%2Fcategory-images%252Fdesktops%252FDesktop.svg&w=256&q=75" alt="Gaming" class="category-icon">
            <p>Gaming</p>
        </div>
        <div class="category-card">
            <img src="https://www.laptopoutlet.hn/_next/image?url=https%3A%2F%2Fstorage.googleapis.com%2Flaptopoutlet%2Fcategory-images%252Fdesktops%252FDesktop.svg&w=256&q=75" alt="Oficina" class="category-icon">
            <p>Oficina</p>
        </div>
        <div class="category-card">
            <img src="https://www.laptopoutlet.hn/_next/image?url=https%3A%2F%2Fstorage.googleapis.com%2Flaptopoutlet%2Fcategory-images%252Flaptops-and-tablets%252FLaptops.svg&w=256&q=75" alt="Accesorios" class="category-icon">
            <p>Laptops</p>
        </div>
        <div class="category-card">
            <img src="https://www.laptopoutlet.hn/_next/image?url=https%3A%2F%2Fstorage.googleapis.com%2Flaptopoutlet%2Fcategory-images%252Fcomponents-and-replacements%252FComponents.svg&w=256&q=75" alt="Componentes" class="category-icon">
            <p>Componentes</p>
        </div>
    </div>
</section>

<div style="height: 80px;"></div>

<section class="products-section">
    <h2 class="product-title">Productos Destacados</h2>
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx1GAcI9HFd4nkJNzUBMi15TiOJQHPPFg6mw&s" alt="PC para Edición">
            <h3>PC para Edición</h3>
            <p>Desde $1500 - Ideal para trabajos de edición de video y diseño gráfico.</p>
            <div class="cta">
                <button onclick="addToCart('PC de edición ', 1500, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx1GAcI9HFd4nkJNzUBMi15TiOJQHPPFg6mw&s')">Añadir al Carrito</button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://www.pccompu.com.uy/imgs/productos/productos31_36176.jpg" alt="PC de Oficina">
            <h3>PC de Oficina</h3>
            <p>Desde $700 - Perfecta para tareas de oficina y productividad.</p>
           
            <div class="cta">
                <button onclick="addToCart('PC de oficina', 1000, 'https://www.pccompu.com.uy/imgs/productos/productos31_36176.jpg')">Añadir al Carrito</button>
            </div>
        </div>
    </div>
</section>

<div class="cta">
    <a href="Pages/productos.php">
        <button>Ver Más Productos</button>
    </a>
</div>

<footer>
<div class="social-media">
    <a href="https://facebook.com" target="_blank" class="social-icon">
    <img src="SRC/IMG/facebook.png" alt="Facebook" class="category-icon">
    </a>
    <a href="https://twitter.com" target="_blank" class="social-icon">
        <img src="SRC/IMG/X.png" alt="Twitter" class="category-icon">
    </a>
    <a href="https://instagram.com" target="_blank" class="social-icon">
        <img src="SRC/IMG/instagram.png" alt="Instagram" class="category-icon">
    </a>
    <a href="https://youtube.com" target="_blank" class="social-icon">
        <img src="SRC/IMG/youtube.png" alt="YouTube" class="category-icon">
    </a>
    <a href="https://tiktok.com/" target="_blank" class="social-icon">
        <img src="SRC/IMG/tik-tok.png" alt="TikTok" class="category-icon">
    </a>
</div>
<br>

    <p>&copy; 2024 GamerZone Store. Todos los derechos reservados.</p>
</footer>

<script>// carrito.js
let cart = JSON.parse(localStorage.getItem('cart')) || [];

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
