<?php  
function Volver(){ 
    if ((isset($_POST['volver']))|| isset($_POST['Volver'])){
        header("Location: ../views/movwelcome.php");
    } 
}
Volver();
?>
