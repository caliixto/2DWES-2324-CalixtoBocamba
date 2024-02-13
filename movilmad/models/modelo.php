<?php
include "../db/db.php";

function iniciar_session($email, $idcliente){
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT idcliente, email, nombre, apellido FROM rclientes WHERE email = :email AND idcliente = :idcliente");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idcliente', $idcliente);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar la existencia del usuario
        if (empty($row)){
            return false;
        } else {
            return $row;
        }
    } catch (PDOException $e) {
        return "Error en la consulta: " . $e->getMessage();
    }
}

?>
