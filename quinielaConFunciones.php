<HTML>
<HEAD> <TITLE> La quiniela del Abuelo</TITLE> </HEAD>
<style>
</style>
<BODY>
<?php
include "funcionesquiniela.php";
$resultados=array();
$partidos=array();
$res=rellenarResultados($resultados);
$game=rellenarPartidos($partidos);
pintar($game,$res);
?>
</BODY>
</HTML>
