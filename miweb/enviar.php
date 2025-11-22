<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $correo = $conn->real_escape_string($_POST['correo']);
    $mensaje = $conn->real_escape_string($_POST['mensaje']);

    $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";
    if ($conn->query($sql) === TRUE) {
        $msg = "¡Mensaje enviado correctamente! Gracias por contactarme.";
    } else {
        $msg = "Error: " . $conn->error;
    }
    $conn->close();
} else {
    $msg = "Acceso no autorizado.";
}

// Detecta si la petición es AJAX
if (
    !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
) {
    echo $msg;
    exit;
}

// Si NO es AJAX, muestra la página HTML completa
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Confirmación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="assets/logo-lobo.png" alt="Logo Lobo" class="logo">
        <nav>
            <a href="index.php">Inicio</a>
            <a href="sobre.php">Sobre Mí</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>
    <main>
        <h1>Contacto</h1>
        <p><?php echo $msg; ?></p>
        <a href="index.php">Volver al inicio</a>
    </main>
    <footer>
        &copy; 2025 Jonathan Cueva | Proyecto Universitario
    </footer>
</body>
</html>
