<?php
session_start();
include "../models/busqueda.php";

if(isset($_POST['agregar'])) {
    $vehiculoSeleccionado = $_POST['vehiculos'];
    $_SESSION['arraycompra'][] = $vehiculoSeleccionado;
}

if(isset($_POST['vaciar'])) {
    $_SESSION['arraycompra'] = array();
}
?>

<html>
<head>
    <!-- Encabezado y enlaces a CSS -->
</head>
<body>
    <h1>Carrito de Compras</h1>
    <form action="" method="post">
        <select name="vehiculos">
            <?php foreach ($array_vehiculos as $vehiculo): ?>
                <option value="<?php echo $vehiculo['matricula']."/".$vehiculo['marca']."/".$vehiculo['modelo']; ?>"><?php echo $vehiculo['matricula']."/".$vehiculo['marca']."/".$vehiculo['modelo']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Agregar a Cesta" name="agregar">
        <input type="submit" value="Vaciar Cesta" name="vaciar">
    </form>
    <h2>Productos en el Carrito:</h2>
    <ul>
        <?php if(isset($_SESSION['arraycompra'])): ?>
            <?php foreach($_SESSION['arraycompra'] as $item): ?>
                <li><?php echo $item; ?></li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</body>
</html>
