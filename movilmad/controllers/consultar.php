<?php
function Consultar(){
    include "../db/db.php";
    
    $stmt = $conn->prepare("SELECT idcliente, matricula,marca,modelo, fecha_alquiler, fecha_devolucion, preciototal FROM rvehiculos, ralquileres where matricula.rvehiculos = matricula.ralquileres;");
    $stmt->execute();
    $consulta = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $consulta;
}










?>