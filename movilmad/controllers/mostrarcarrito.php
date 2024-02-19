<?php
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['agregar'])) {
    if (isset($_POST['vehiculos'])) {
        if (count($_SESSION['carrito']) < 3) {
            $producto = $_POST['vehiculos'];
            $_SESSION['carrito'][] = $producto;
            echo "Producto agregado al carrito.";
        } else {
            echo "Solo se pueden añadir 3 productos. Gracias";
        }
    } else {
        echo "<script>alert('Debes seleccionar un producto antes de agregarlo al carrito.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>
<body>
<?php  
function Carro(){
    echo "<h2>Elementos en el carrito:</h2>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Matricula</th>";
    echo "<th>Marca</th>";
    echo "<th>Modelo</th>";
    echo "</tr>";

    foreach($_SESSION['carrito'] as $carro){
        $dividido = explode("/", $carro);
        echo "<tr>";
        echo "<td>" . $dividido[0] . "</td>";
        echo "<td>" . $dividido[1] . "</td>";
        echo "<td>" . $dividido[2] . "</td>";
        echo "</tr>";
    } 
    echo "</table>";
}
function EliminarCarrito(){
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['vaciar'])){
    if(!empty($_SESSION['carrito'])){
        unset($_SESSION['carrito']);
    }
  }
}

?>
</body>
</html>
