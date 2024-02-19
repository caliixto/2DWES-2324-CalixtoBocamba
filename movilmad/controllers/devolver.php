<?php 
session_start();
function Volver(){
    if ((isset($_POST['volver']))){
        header("Location: ../views/movwelcome.php");
    } 
}
function DevolverVehiculo(){
    include "./mostrarcarrito.php";  
   
    $opciones = ""; // Variable para almacenar las opciones

    foreach($_SESSION['carrito'] as $x){
        $unido = explode("/", $x);
        $junto = implode("/", $unido);
        $opciones .= "<option value='" . $unido[0] . "'>" . $junto . "</option>"; // Concatenar opciones
    }

    echo $opciones;
}
Volver();
?>
