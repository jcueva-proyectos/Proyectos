<?php
session_start();
require_once 'config.php';

$error = "";

// Solo genera el captcha si la petición es GET (no POST)
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $a = rand(1, 10);
    $b = rand(1, 10);
    $_SESSION['captcha_sum'] = $a + $b;
    $_SESSION['captcha_text'] = "$a + $b";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $correo = trim($_POST['correo']);
    $contrasena = $_POST['contrasena'];
    $captcha = $_POST['captcha'];

    // Validar campos vacíos
    if (empty($correo) || empty($contrasena) || empty($captcha)) {
        $error = "Todos los campos son obligatorios.";
    }
    // Validar captcha
    elseif ($captcha != $_SESSION['captcha_sum']) {
        $error = "La suma es incorrecta.";
        // No regeneres el captcha aquí, así el usuario puede intentar de nuevo con el mismo captcha
    }
    else {
        // Buscar usuario
        $stmt = $link->prepare("SELECT id, nombre, contrasena FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $nombre, $hash);
            $stmt->fetch();
            if (password_verify($contrasena, $hash)) {
                // Iniciar sesión y guardar datos
                session_regenerate_id(true);
                $_SESSION['user_id'] = $id;
                $_SESSION['nombre'] = $nombre;
                $_SESSION['last_activity'] = time();
                // Limpia el captcha para la próxima vez
                unset($_SESSION['captcha_sum']);
                unset($_SESSION['captcha_text']);
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Contraseña incorrecta.";
            }
        } else {
            $error = "Usuario no encontrado.";
        }
        $stmt->close();
        // No regeneres el captcha aquí
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Portal Salud</title>
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
        .login-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(60, 179, 113, 0.2);
            width: 90%;
            max-width: 400px;
            margin: 60px auto;
            padding: 40px 30px;
        }
        .login-container h2 {
            color: #3e7bd6;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group label {
            color: #388e3c;
            font-weight: 500;
        }
        .btn-login {
            background: #3e7bd6;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 0;
            width: 100%;
            font-size: 1.1em;
        }
        .btn-login:hover {
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
    <div class="login-container">
        <!-- Logo de salud (puedes cambiar la ruta por la tuya) -->
        <img src="assets/images/logo_salud.png" alt="Logo Salud" class="logo-salud">
        <h2><i class="bi bi-person-circle"></i> Iniciar Sesión</h2>
        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="correo"><i class="bi bi-envelope"></i> Correo electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ej: correo@ejemplo.com" required>
            </div>
            <div class="form-group">
                <label for="contrasena"><i class="bi bi-lock"></i> Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Tu contraseña" required>
            </div>
            <div class="form-group">
                <label for="captcha"><i class="bi bi-calculator"></i> ¿Cuánto es <?php echo $_SESSION['captcha_text']; ?>?</label>
                <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Resultado" required>
            </div>
            <button type="submit" name="login" class="btn btn-login"><i class="bi bi-box-arrow-in-right"></i> Entrar</button>
        </form>
        <div class="text-center mt-3">
            <span>¿No tienes cuenta?</span> <a href="register.php">Regístrate</a>
        </div>
    </div>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
