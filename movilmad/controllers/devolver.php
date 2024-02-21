<?php 
session_start();
function DevolverVehiculo(){
    include "../controllers/volver.php";
				Volver(); 
   
    $opciones = ""; // Variable para almacenar las opciones

    foreach($_SESSION['carrito'] as $x){
        $unido = explode("/", $x);
        $junto = implode("/", $unido);
        $opciones .= "<option value='" . $unido[0] . "'>" . $junto . "</option>"; // Concatenar opciones
    }

    echo $opciones;
}
?>
