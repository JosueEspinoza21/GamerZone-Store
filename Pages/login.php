<?php
// Habilitar la visualización de errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir el archivo de conexión a la base de datos
include 'conexion.php'; // Asegúrate de que la ruta sea correcta

// Iniciar la sesión
session_start();

// Verificar si ya hay una sesión activa
if (isset($_SESSION['usuario_id'])) {
    // Si el usuario ya está logueado, redirigir al index.php
    header('Location: ../Index.php');
    exit;
}

// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $correo = isset($_POST['correo']) ? trim($_POST['correo']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;

    // Validar que los campos no estén vacíos
    if (!$correo || !$password) {
        $_SESSION['error'] = "Por favor, complete todos los campos.";
    } else {
        // Validar el formato del correo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "El formato del correo no es válido.";
        } else {
            // Consultar la base de datos para verificar las credenciales
            try {
                $sql = "SELECT * FROM usuarios WHERE correo = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $correo);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // El usuario existe, verificar la contraseña
                    $usuario = $result->fetch_assoc();
                    
                    // Verificar si la contraseña es correcta
                    if (password_verify($password, $usuario['password'])) {
                        // Contraseña correcta, redirigir al usuario
                        $_SESSION['usuario_id'] = $usuario['id'];  // Asegúrate que 'id' existe
                        $_SESSION['usuario_nombre'] = $usuario['nombre'];
                        $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
                        $_SESSION['success'] = "¡Conexión exitosa!";
                        // Redirigir a la página principal o donde se desee
                        header('Location: ../Index.php');
                        exit;
                    } else {
                        $_SESSION['error'] = "La contraseña es incorrecta.";
                    }
                } else {
                    $_SESSION['error'] = "El correo no está registrado.";
                }

                $stmt->close();
            } catch (Exception $e) {
                $_SESSION['error'] = "Error: " . $e->getMessage();
            }
        }
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
    <title>GamerZone Store - Iniciar Sesión</title>
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

        /* Estilos de la sección de Iniciar Sesión */
        .login {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login h2 {
            text-align: center;
            color: #333;
        }
        .login form {
            display: flex;
            flex-direction: column;
        }
        .login label {
            margin-top: 10px;
            color: #555;
        }
        .login input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .login button {
            margin-top: 20px;
            padding: 15px;
            background-color: #66fcf1;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
        }
        .login button:hover {
            background-color: #1f2833;
            color: white;
        }

        /* Estilo para mostrar mensajes de éxito o error */
        .message {
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .success {
            background-color: #66fcf1;
            color: black;
        }
        .error {
            background-color: #ff4d4d;
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
            <img src="../SRC/IMG/Carrito.png" class="cart-icon" alt="Carrito de Compras">
        </div> -->
    </div>
</header>

<nav class="main-nav">
    <a href="../Index.php">Inicio</a>
    <a href="productos.php">Productos</a>
    <a href="servicios.php">Servicios</a>
    <a href="contacto.php">Contacto</a>
    <a href="Nosotros.php">Nosotros</a>
</nav>

<section class="login">
    <h2>Iniciar Sesión</h2>
    
    <!-- Mostrar mensaje de éxito o error si existen -->
    <?php
    if (isset($_SESSION['success'])) {
        echo '<div class="message success">' . $_SESSION['success'] . '</div>';
        unset($_SESSION['success']); // Limpiar mensaje de éxito
    }
    if (isset($_SESSION['error'])) {
        echo '<div class="message error">' . $_SESSION['error'] . '</div>';
        unset($_SESSION['error']); // Limpiar mensaje de error
    }
    ?>
    
    <form action="login.php" method="post">
        <label for="correo">Correo Electrónico</label>
        <input type="email" id="correo" name="correo" required>
    
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
    
        <button type="submit">Ingresar</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 GamerZone Store. Todos los derechos reservados.</p>
</footer>

<script src="/proyecto/API/carrito.js"></script>
</body>
</html>
