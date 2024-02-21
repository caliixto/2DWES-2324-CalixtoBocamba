<?php 

function GuardarAlquiler(){
    include "../db/db.php";
    // Obtener el carrito de la sesión
    $carrito = [];
    if(isset($_SESSION['carrito'])){
        $carrito = $_SESSION['carrito'];
    }
    
    
    /
    if (!empty($carrito)) {
        $idcliente = $_SESSION['idcliente'];
        $fecha_alquiler = date("Y-m-d H:i:s");

        try {
            
            foreach ($carrito as $producto) {
                
                $dividido = explode("/", $producto);
                $matricula = $dividido[0]; 
                
               
                $stmt = $conn->prepare("INSERT INTO ralquileres (idcliente, matricula, fecha_alquiler, fecha_devolucion, preciototal, fechahorapago) VALUES (:idcliente, :matricula, :fecha_alquiler, NULL, NULL, NULL)");
                $stmt->bindParam(':idcliente', $idcliente);
                $stmt->bindParam(':matricula', $matricula);
                $stmt->bindParam(':fecha_alquiler', $fecha_alquiler);
                $stmt->execute();
            }

            echo "Alquiler realizado correctamente";
            unset($_SESSION['carrito']);
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
        }
    } else {
        echo "No hay productos en el carrito.";
    }
}
?>
