<!DOCTYPE html>
<html lang="es">
<head>
    <title>GamerZone Store - Carrito</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .cart {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
        .cart h2 {
            text-align: center;
        }
        .cart-items {
            list-style-type: none;
            padding: 0;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .cart-item img {
            max-width: 50px;
            height: auto;
        }
        .cart-item button {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }
        .cart-item button:hover {
            background-color: #e60000;
        }
        .total-price {
            font-size: 20px;
            margin-top: 20px;
            text-align: right;
        }
        footer {
            background-color: #0b0c10;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <img src="../SRC/IMG/estan.png" alt="Logo GamerZone" class="logo">
    <h1>Carrito de Compras</h1>
    <div class="user-options">
        <a href="login.php">Iniciar Sesión</a>
        <a href="registro.php">Registrarse</a>
        <div class="cart-container" onclick="window.location.href='carrito.php'">
            <span id="cart-badge" class ="cart-badge">0</span>
            <img src="../SRC/IMG/Carrito.png" class="cart-icon">
        </div>
    </div>
</header>

<!-- header.php -->
<nav class="main-nav">
<a href="../Index.php">Inicio</a>
    <a href="productos.php">Productos</a>
    <a href="servicios.php">Servicios</a>
    <a href="contacto.php">Contacto</a>
    <a href="Nosotros.php">Nosotros</a>
</nav>

<div class="cart">
    <h2>Productos en tu carrito:</h2>
    <ul id="cart-items" class="cart-items">
        <!-- Los productos se cargarán aquí -->
    </ul>
    <div class="total-price">
        <p>Total: $<span id="total-price">0.00</span></p>
    </div>
    <button onclick="finalizarCompra()">Finalizar Compra</button>
</div>

<footer>
    <p>&copy; 2024 GamerZone Store. Todos los derechos reservados.</p>
</footer>

<script>
    let cart = [];

    function addToCart(name, price, imgSrc) {
        const product = { name, price, imgSrc };
        cart.push(product);
        updateCartBadge();
        saveCart();
    }

    function updateCartBadge() {
        document.getElementById('cart-badge').textContent = cart.length;
    }

    function removeFromCart(index) {
        cart.splice(index, 1);
        saveCart();
        displayCartItems();
    }

    function saveCart() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    function loadCart() {
        const savedCart = JSON.parse(localStorage.getItem('cart'));
        if (savedCart) cart = savedCart;
        updateCartBadge();
        displayCartItems();
    }

    function displayCartItems() {
        const cartItems = document.getElementById('cart-items');
        cartItems.innerHTML = '';
        let totalPrice = 0;

        cart.forEach((item, index) => {
            const itemElement = document.createElement('li');
            itemElement.classList.add('cart-item');
            itemElement.innerHTML = `
                <img src="${item.imgSrc}" alt="${item.name}">
                <span>${item.name} - $${item.price}</span>
                <button onclick="removeFromCart(${index})">Eliminar</button>
            `;
            cartItems.appendChild(itemElement);
            totalPrice += item.price;
        });

        document.getElementById('total-price').textContent = totalPrice.toFixed(2);
    }

    function finalizarCompra() {
        alert("¡Gracias por tu compra! Total a pagar: $" + document.getElementById('total-price').textContent);
        cart = [];
        saveCart();
        displayCartItems();
    }

    window.onload = loadCart;
</script>

</body>
</html>