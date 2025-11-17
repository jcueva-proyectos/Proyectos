<?php
// Destruir la sesión y redirigir al inicio
session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit;
?>

