<HTML>
<HEAD> <TITLE> La quiniela del Abuelo</TITLE> </HEAD>
<body>
<?php
$resultado1=["1","2","1","2","x","2","1","x","x","x","x","x","x","x"];
$resultado2=["2","2","1","2","x","2","1","x","x","x","x","x","x","x"];
$resultado3=["x","2","1","2","x","2","1","x","x","x","x","x","x","x"];
$resultado4=["4","2","1","2","x","2","1","x","x","x","x","x","x","x"];

$resultados=array($resultado1,$resultado2,$resultado3,$resultado4);
$partidos = [
    "Eibar-Real Madrid", "Sevilla-Valencia", "Getafe-Levante", "Espanyol-Real Sociedad",
    "At.Madrid-Celta", "Las Palmas-Villareal", "Athletic Club-Leganes", "Betis Feminas-Santa Teresa",
    "Granadilla-Athletic Club Fem", "Levante Fem-Sporting Huelva", "Espanyol Fem-F.Albacete",
    "Barcelona Fem-At. Madrid Fem", "Sevilla Fem-Real Sociedad Fem", "Rayo FEM-Zaragoza CFF"
];
for ($i=0;$i<4;$i++){
    echo "Columna ",($i+1),": </br>";
    for ($j=0;$j<14;$j++){
        printf($partidos[$j].". ".$resultados[$i][$j]."</br>");
    }
    echo "</br>";
}
?>
</BODY>
</HTML>