<?php
$host = "db";
$user = "manuel";
$pass = "manuel";
$db   = "api";

// Intentamos conectar al OTRO contenedor
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "<h2>❌ Error: No puedo ver el contenedor de la base de datos</h2>";
    echo "<p>" . $conn->connect_error . "</p>";
} else {
    echo "<h2>✅ ¡Éxito!</h2>";
    echo "<p>Este es el <b>Contenedor B</b> (Puerto 8082) conectado a la <b>DB del Contenedor A</b>.</p>";
    
    // Crear tabla de prueba
    $conn->query("CREATE TABLE IF NOT EXISTS prueba_microservicios (id INT AUTO_INCREMENT PRIMARY KEY, msg VARCHAR(50))");
    echo "<p>Tabla verificada en la base de datos compartida.</p>";
}
?>
