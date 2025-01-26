<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
<!--Realice un script PHP que muestre mediante la utilización de variables sus datos personales: nombre 
completo, lugar de nacimiento (departamento y país, si es extranjero), edad y carnet de la universidad. 
Muestre estos datos en una tabla.-->

<style>
table, th, td{
border: 2px solid purple;
border-collapse: collapse;
background-color: bisque;
font-family: Arial;
}
th, td {
    padding: 10px;
}
th {
    text-align: left;
}
h2 {
    text-align: center;
    font-size: 50px;
    font-family: Arial;
}
</style>

<h2>MIS DATOS PERSONALES</h2>
<?php
$nombre_completo="Liliana Milagro Portillo Navarro";
$lugar_nacimiento="El Salvador";
$edad="22 años";
$carnet="PN211471";
echo "<center><table  width=500px style=text-align:center></center>";
echo "<tr>";
echo "<th> Nombre Completo:</th>";
echo "<td>" .$nombre_completo."</td>";
echo "</tr>";
echo "<tr>";
echo "<th> Lugar de nacimiento:</th>";
echo "<td>".$lugar_nacimiento."</td>";
echo "</tr>";
echo "<th> Edad: </th>";
echo "<td>".$edad."</td>";
echo "</tr>";
echo "<th> Carnet: </th>";
echo "<td>".$carnet."</td>";
echo "</tr>";
echo "</table>"
?>   
</body>
</html>