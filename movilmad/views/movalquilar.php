<?php session_start();?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a MovilMAD</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
   
<body>
    <h1>Servicio de ALQUILER DE E-CARS</h1> 
    <div class="container ">
        <!--Aplicacion-->
        <div class="card border-success mb-3" style="max-width: 30rem;">
            <div class="card-header">Menú Usuario - ALQUILAR VEHÍCULOS</div>
            <div class="card-body">
                <!-- INICIO DEL FORMULARIO -->
                <form action="" method="post">
                    <B>Bienvenido/a:<?php echo $_SESSION['nombre']." ".$_SESSION['apellido'];?></B>
                    <BR><BR>
                    <B>Identificador Cliente:<?php echo $_SESSION['idcliente'];?></B><BR><BR>
                    <B>Vehiculos disponibles en este momento: <?php 
					date_default_timezone_set('Europe/Madrid');
					echo date("Y-m-d") ?></B><BR><BR>
                    <B>Matricula/Marca/Modelo:</B> 
                    <select name="vehiculos" class="form-control">
                        <?php  
                            include "../controllers/alquilar.php";
                            MostrarModelo(); 
                        ?>
                    </select>
                    <BR><BR>
                    <div>
                        <input type="submit" value="Agregar a Cesta" name="agregar" class="btn btn-warning disabled">
                        <input type="submit" value="Realizar Alquiler" name="alquilar" class="btn btn-warning disabled">
                        <input type="submit" value="Vaciar Cesta" name="vaciar" class="btn btn-warning disabled">
                    </div>	
                    <?php 
                    include "../controllers/mostrarcarrito.php";
                    Carro();
                    ?>
                    <br><br>
                     <a href="./movwelcome.php">Volver</a>
                </form>
                <?php 
                Alquilar();
                EliminarCarrito();
            ?>
                <!-- FIN DEL FORMULARIO -->
            </div>
        </div>
        
    </div>
   

</body>
</html>