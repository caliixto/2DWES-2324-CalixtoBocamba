<?php 
session_start();
function MostrarModelo(){
    include "../models/busqueda.php";                
    $array_vehiculos = Busqueda(); 
   
   
   foreach ($array_vehiculos as $vehiculo){
       echo "<option value='" . $vehiculo['matricula'] . "/" . $vehiculo['marca'] . "/" . $vehiculo['modelo'] . "'>" . $vehiculo['matricula'] . "/" . $vehiculo['marca'] . "/" . $vehiculo['modelo'] . "</option>";
   } 

}
function Alquilar(){
    include "../models/guardarAlquiler.php";
    if(isset($_POST['alquilar']) && !empty(isset($_SESSION['carrito']))){
        GuardarAlquiler();
    }
}            
?> 
