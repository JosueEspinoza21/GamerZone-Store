<?php
        // Datos de conexión
        $servername = "localhost";
        $username = "root";
        $password = ""; // Por defecto, sin contraseña
        $dbname = "gamerzone"; // Nombre de la base de datos en phpMyAdmin

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Comprobar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        } else {
            echo "¡Conexión exitosa a la base de datos!";
        }
?>

