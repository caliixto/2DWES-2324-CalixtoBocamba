<?php  
function Busqueda(){
    include "../db/db.php";
    
    $stmt = $conn->prepare("SELECT matricula, marca, modelo, disponible FROM rvehiculos WHERE disponible = 'S';");
    $stmt->execute();
    $array_vehiculos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array_vehiculos;
}
?>
	 