
<?php
session_start();
include "../funciones/funciones.php";
include "../models/modelo.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST['email']);
    $idcliente = test_input($_POST['password']);

    $row = iniciar_session($email, $idcliente);
    if ($row) { 
        
        $_SESSION['idcliente'] = $row['idcliente'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellido'] = $row['apellido'];

        header("Location: ../views/movwelcome.php");
    } else {
        $mensaje = "Correo electrónico o contraseña incorrecta, vuelva a intentarlo por favor";
        echo $mensaje;
    }
}
?>
