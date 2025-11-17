<?php
// Mostrar errores para desarrollo (quitar en producción)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Iniciar sesión y requerir conexión
session_start();
require_once 'config.php';

$error = $success = "";

// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $contrasena = $_POST['contrasena'];
    $confirmar = $_POST['confirmar'];

    // Validación de campos vacíos
    if (empty($nombre) || empty($correo) || empty($contrasena) || empty($confirmar)) {
        $error = "Todos los campos son obligatorios.";
    }
    // Validación de formato de correo
    elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error = "El correo electrónico no es válido.";
    }
    // Validación de contraseña segura
    elseif (!preg_match('/^(?=.*[A-Z])(?=.*[\W_]).{6,}$/', $contrasena)) {
        $error = "La contraseña debe tener al menos 6 caracteres, una mayúscula y un carácter especial.";
    }
    // Confirmación de contraseña
    elseif ($contrasena !== $confirmar) {
        $error = "Las contraseñas no coinciden.";
    }
    else {
        // Verificar si el correo ya existe
        $stmt = $link->prepare("SELECT id FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $error = "El correo ya está registrado.";
        } else {
            // Hash de la contraseña
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);
            // Insertar usuario
            $stmt = $link->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $correo, $hash);
            if ($stmt->execute()) {
                $success = "¡Registro exitoso! Ahora puedes <a href='login.php'>iniciar sesión</a>.";
            } else {
                $error = "Error al registrar. Intenta de nuevo.";
            }
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario - Portal Salud</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Íconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            background: linear-gradient(120deg, #a8e063, #56ab2f);
            font-family: 'Segoe UI', sans-serif;
        }
        .register-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(60, 179, 113, 0.2);
            width: 90%;
            max-width: 400px;
            margin: 60px auto;
            padding: 40px 30px;
        }
        .register-container h2 {
            color: #3e7bd6;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group label {
            color: #388e3c;
            font-weight: 500;
        }
        .btn-register {
            background: #3e7bd6;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 0;
            width: 100%;
            font-size: 1.1em;
        }
        .btn-register:hover {
            background: #388e3c;
        }
        .error, .success {
            text-align: center;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
        }
        .error { background: #ffe0e0; color: #d8000c; }
        .success { background: #e0ffe0; color: #388e3c; }
        .text-center a { color: #3e7bd6; }
        .logo-salud {
            display: block;
            margin: 0 auto 20px auto;
            max-width: 80px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Logo de salud (puedes cambiar la ruta por la tuya) -->
        <img src="assets/images/logo_salud.png" alt="Logo Salud" class="logo-salud">
        <h2><i class="bi bi-person-plus"></i> Registro de Usuario</h2>
        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
        <?php if (!empty($success)) echo "<div class='success'>$success</div>"; ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="nombre"><i class="bi bi-person"></i> Nombre completo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
            </div>
            <div class="form-group">
                <label for="correo"><i class="bi bi-envelope"></i> Correo electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ej: correo@ejemplo.com" required>
            </div>
            <div class="form-group">
                <label for="contrasena"><i class="bi bi-lock"></i> Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Mínimo 6 caracteres, 1 mayúscula y 1 especial" required>
            </div>
            <div class="form-group">
                <label for="confirmar"><i class="bi bi-lock-fill"></i> Confirmar contraseña</label>
                <input type="password" class="form-control" id="confirmar" name="confirmar" placeholder="Repite la contraseña" required>
            </div>
            <button type="submit" name="register" class="btn btn-register"><i class="bi bi-person-plus"></i> Registrarse</button>
        </form>
        <div class="text-center mt-3">
            <span>¿Ya tienes cuenta?</span> <a href="login.php">Inicia sesión</a>
        </div>
    </div>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
