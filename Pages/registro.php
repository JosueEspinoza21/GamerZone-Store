<?php
// Habilitar la visualización de errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir el archivo de conexión
include 'conexion.php'; // Asegúrate de que la ruta sea correcta

// Verificar si se recibieron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados desde el formulario
    $nombre = isset($_POST['name']) ? trim($_POST['name']) : null;
    $correo = isset($_POST['email']) ? trim($_POST['email']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;

    // Validar los campos (comprobar que no están vacíos)
    if (!$nombre || !$correo || !$password) {
        echo "Por favor, complete todos los campos.";
        exit;
    }

    // Validar el formato del correo
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "El formato del correo no es válido.";
        exit;
    }

    // Encriptar la contraseña
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Preparar la consulta SQL para insertar al usuario
        $sql = "INSERT INTO usuarios (nombre, correo, password, tipo_usuario) VALUES (?, ?, ?, 'cliente')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nombre, $correo, $passwordHash);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            echo "Error al registrar el usuario: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    // Cerrar la conexión
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerZone Store - Registrarse</title>
    <style>
        /* Estilos globales */
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

        /* Estilos de la sección de Registro */
        .register {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .register h2 {
            text-align: center;
            color: #333;
        }
        .register form {
            display: flex;
            flex-direction: column;
        }
        .register label {
            margin-top: 10px;
            color: #555;
        }
        .register input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .register button {
            margin-top: 20px;
            padding: 15px;
            background-color: #66fcf1;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
        }
        .register button:hover {
            background-color: #1f2833;
            color: white;
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
        <!-- <div class="cart-container" onclick="window.location.href='carrito.php'">
            <span id="cart-badge" class="cart-badge">0</span>
            <img src="../SRC/IMG/Carrito.png" class="cart-icon">
        </div> -->
    </div>
</header>

<!-- header.php -->
<nav class="main-nav">
    <a href="../Index.php">Inicio</a>
    <a href="productos.php">Productos</a>
    <a href="servicios.php">Servicios</a>
    <a href="contacto.php">Contacto</a>
    <a href="Nosotros.php">Nosotros</a>
    <a href="carrito.php">Contacto</a>
</nav>


<section class="register">
    <h2>Registrarse</h2>
    <form action="http://localhost/proyecto/Pages/registro.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Crear Cuenta</button>
    </form>
</section>


<footer>
    <p>&copy; 2024 GamerZone Store. Todos los derechos reservados.</p>
</footer>

<script src="carrito.js"></script>
</body>
</html>

