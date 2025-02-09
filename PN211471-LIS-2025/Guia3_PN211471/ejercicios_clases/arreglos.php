<?php
$edades = [10,14,25,96.7]; //creando arreglo
echo $edades[0]."<br>"; //accediendo a un elemento
$edades[1]=28; //modificando un elemento
array_push($edades,100);//agregando un elemento
$edades[10]= 10;
unset($edades[0]); //eliminando un elemento
print_r($edades);

echo "<h2>Recorriendo el arreglo con for</h2>";
foreach( $edades as $edad ) {
    echo "<p>$edad</p>";
}
echo "El tamaño del arreglo es: ".count($edades)."<br>";
//ordenando un arreglo
sort($edades);//ordenamos de forma mutable
$edades=array_reverse($edades);//Invertimos el orden de forma inmutable
print_r($edades);

$datos_personales=[];
$datos_personales['nombre']= "Mila";
$datos_personales["apellido"]= "Nava";
$datos_personales["estatura"]= 1.70;
$datos_personales["genero"]= "F";
print_r($datos_personales);

echo "<h2>Imprimiendo los elementos del arreglo asociativo</h2>";
foreach($datos_personales as $clave=>$dato){
    echo "<p>$clave: $dato</p>";
}

$persona2=[
    'nombre'=> "Mila",
    'apellido'=> "Nava",
    'estatura'=> 1.70,
    'genero'=> "F"
];
print_r($persona2);