<?php
include "../db/db.php";

function iniciar_session($email, $idcliente){
    global $conn;
    try {//Con un select sacamos los datos de los clientes
        $stmt = $conn->prepare("SELECT idcliente, email, nombre, apellido FROM rclientes WHERE email = :email AND idcliente = :idcliente");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idcliente', $idcliente);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC); // Array asociativo el cual, 

        // Si el usuario existe, inicia sesion y devuelve.
        if (empty($row)){
            return false;
        } else {
            return $row; //Si el usuario no existe, devuelves la columa la cual comprueba si esta vacia
        }
    } catch (PDOException $e) {
        return "Error en la consulta: " . $e->getMessage();
    }
}

?>
