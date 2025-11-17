<?php
// Iniciar sesión y proteger la página
session_start();

// Tiempo máximo de inactividad (15 minutos)
$timeout = 900; // 900 segundos

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Verificar tiempo de inactividad
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    session_unset();
    session_destroy();
    header("Location: login.php?timeout=1");
    exit;
}
$_SESSION['last_activity'] = time(); // Actualizar tiempo de actividad

// Obtener el nombre del usuario
$nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Usuario';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a Portal Salud</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            background: linear-gradient(120deg, #a8e063, #56ab2f);
            font-family: 'Segoe UI', sans-serif;
        }
        .dashboard-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(60, 179, 113, 0.2);
            width: 90%;
            max-width: 600px;
            margin: 60px auto;
            padding: 40px 30px;
            text-align: center;
        }
        .dashboard-container h2 {
            color: #3e7bd6;
            margin-bottom: 20px;
        }
        .dashboard-container p {
            color: #333;
            font-size: 1.2em;
        }
        .btn-logout {
            margin-top: 30px;
            background: #3e7bd6;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 30px;
            font-size: 1em;
        }
        .btn-logout:hover {
            background: #388e3c;
        }
        .navbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(60, 179, 113, 0.1);
        }
        .navbar-brand img {
            height: 40px;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo_salud.png" alt="Logo Salud">
            Portal Salud
        </a>
        <div class="ml-auto">
            <span class="mr-3 font-weight-bold text-success">
                <?php echo htmlspecialchars($nombre); ?>
            </span>
            <a href="logout.php" class="btn btn-danger btn-sm">Cerrar Sesión</a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="dashboard-container">
        <h2>¡Bienvenido, <?php echo htmlspecialchars($nombre); ?>!</h2>
        <p>Has iniciado sesión correctamente en el <b>Portal de Salud</b>.</p>
        <img src="assets/images/doctor-welcome.svg" alt="Bienvenido" style="max-width:200px; margin:20px 0;">
        <p>
            Aquí podrás acceder a información relevante sobre tu salud, consultar tus datos y mucho más.
        </p>
        <a href="logout.php" class="btn-logout">Cerrar Sesión</a>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
