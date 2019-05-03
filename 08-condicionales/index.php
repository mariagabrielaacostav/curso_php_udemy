<?php

/*
//Condicional IF

    if(condición){
        instrucciones
    }else{
        otras instrucciones
   }
 
//Operadores de comparación
 
 == igual (acepta diferentes tipos de datos)
 === es identico (incluyendo el tipo de datos)
 != diferente
 <> diferente
 !== no identico
 < menor que
 > mayor que
 <= menor o igual que
 >= mayor o igual que
  
 
 Operadores Lógicos
 
  &&  AND Y
 ||     OR O 
 !      NOT NO
 
*/

//----------------Ejemplo 1--------------------------------------------------------------------------


$color = "azul";


if($color =="rojo"){
    echo ("el color es ".$color);
    
}else{
    echo("El color NO es rojo");
}

echo "<br>";

//----------------Ejemplo 2--------------------------------------------------------------------------

$year = 2019;

if($year < 2019){
    echo("Es un año anterior 2019");
}else{
    echo("No estamos en el 2019");
}

echo "<br>";

//----------------Ejemplo 3--------------------------------------------------------------------------


$nombre= "David";
$ciudad = "Madrid";
$conotinente = "America";
$edad = 49;
$mayoria_edad = 18;

if($edad >=$mayoria_edad){
    echo($nombre." es mayor de edad");
    
    if($conotinente=="Europa"){
        echo(" y es de ".$ciudad);
     }else{ 
         echo(" y no es europeo");
     }
}else{
    echo($nombre." No es mayor de edad");
}

echo "<br>";

//----------------Ejemplo 4-Else if --------------------------------------------------------------------------


$dia=3;

if($dia==1){ 
  echo "Es lunes";  
}elseif($dia==2){ 
    echo "Martes";
}elseif($dia=3){ 
    echo "Miercoles";
}elseif($dia=4){ 
    echo "jueves";
}elseif($dia=5){ 
    echo "viernes";
}elseif($dia=6){ 
    echo "es fin de semana";
}

echo "<br>";
echo "<hr>";

//----------------Ejemplo 5-Operadores logicos --------------------------------------------------------------------------

$edad1=18;
$edad2=64;
$edad_oficial = 17;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Esta en edad de trabajar";
}else{
    echo "no puede trabajar";
}

echo "<hr>";


$pais = "rancia";

if($pais=="Mexico" || $pais=="España" || $pais=="Colombia"){
    echo "En este pais se habla español";
}else{
    echo "En este pais NO habla español";
}

//----------------Ejemplo 6- Switch --------------------------------------------------------------------------

echo "<hr>";

$dia=5;

switch ($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";
            
}

//----------------Ejemplo 7- Goto --------------------------------------------------------------------------

echo"<hr>";

goto marca;

echo "<h3>Instrucción 1</h3><br>";
echo "<h3>Instrucción 2</h3><br>";
echo "<h3>Instrucción 3</h3><br>";
echo "<h3>Instrucción 4</h3><br>";

marca:
    echo "Me he saltado 4 echos";

