<?php
// Archivo de configuración para la conexión a la base de datos
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', ''); // Por defecto en XAMPP
define('DB_NAME', 'login_db');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}
?>


