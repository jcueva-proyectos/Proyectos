<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a Portal Salud</title>
    <!-- Enlaces a hojas de estilo y recursos de la plantilla principal -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        /* Estilos personalizados para la sección de bienvenida */
        .welcome-section {
            background: #e3f6f5;
            padding: 60px 0 60px 0;
            text-align: center;
        }
        .welcome-section h2 {
            color: #2d8f83;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .welcome-section p {
            color: #555;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .welcome-section .btn-group {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .welcome-section .btn {
            background: #2d8f83;
            color: #fff;
            border: none;
            padding: 15px 35px;
            font-size: 1.1rem;
            border-radius: 30px;
            transition: background 0.3s;
        }
        .welcome-section .btn:hover {
            background: #1b5e57;
        }
        .logo img {
            max-height: 60px;
        }
    </style>
</head>
<body>
    <!-- Sección de encabezado (header) con menú de navegación -->
    <div class="header_section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Logo del portal de salud -->
            <a class="logo" href="index.php"><img src="images/logo_salud.png" alt="Logo Salud"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menú de navegación -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consejos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
                <!-- Icono de usuario para iniciar sesión -->
                <div class="search_icon"><a href="login.php"><img src="images/user-icon.png"><span class="padding_left_15">Iniciar Sesión</span></a></div>
            </div>
        </nav>
    </div>
    <!-- Fin del header -->

    <!-- Sección de bienvenida personalizada -->
    <div class="welcome-section">
        <div class="container">
            <h2>Bienvenido al Portal de Salud</h2>
            <p>Por favor, elige una opción para continuar:</p>
            <div class="btn-group">
                <!-- Botón para ir al login -->
                <a href="login.php" class="btn">Iniciar Sesión</a>
                <!-- Botón para ir al registro -->
                <a href="register.php" class="btn">Registrarse</a>
            </div>
        </div>
    </div>
    <!-- Fin de la sección de bienvenida -->

    <!-- Sección de pie de página (footer) -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Consejos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="social_icon">
                <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Fin del footer -->

    <!-- Sección de derechos de autor -->
    <div class="copyright_section">
        <div class="container">
            <div class="copyright_text">
                Copyright 2024 Todos los derechos reservados | Portal Salud
            </div>
        </div>
    </div>
    <!-- Fin de derechos de autor -->

    <!-- Archivos JavaScript de la plantilla -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
</body>
</html>
