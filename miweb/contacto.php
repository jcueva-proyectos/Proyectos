<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Jonathan Cueva</title>
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
        <form action="enviar.php" method="POST" class="formulario">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            <label>Correo:</label>
            <input type="email" name="correo" required>
            <label>Mensaje:</label>
            <textarea name="mensaje" required></textarea>
            <button type="submit">Enviar</button>
        </form>
        <div id="respuesta"></div>
    </main>
    <footer>
        &copy; 2025 Jonathan Cueva | Proyecto Universitario
    </footer>
    <!-- Carga jQuery primero -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Luego tu código AJAX -->
    <script>
    $(document).ready(function(){
        $('.formulario').submit(function(e){
            e.preventDefault(); // Evita el envío normal del formulario

            // Obtiene los datos del formulario
            var datos = $(this).serialize();

            // Envía los datos por AJAX a enviar.php
            $.ajax({
                type: 'POST',
                url: 'enviar.php',
                data: datos,
                success: function(respuesta){
                    $('#respuesta').html('<div class="alert alert-success" style="margin-top:15px;">'+respuesta+'</div>');
                    $('.formulario')[0].reset(); // Limpia el formulario
                },
                error: function(){
                    $('#respuesta').html('<div class="alert alert-danger" style="margin-top:15px;">Ocurrió un error al enviar el mensaje.</div>');
                }

            });
        });
    });
    </script>
</body>
</html>

