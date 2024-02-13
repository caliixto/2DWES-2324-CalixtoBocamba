<?php
session_start();
include "./models/busqueda.php";

// Aquí puedes manejar otras solicitudes y redireccionamientos, según sea necesario.
header("Location: ./carrito.php");
?>
