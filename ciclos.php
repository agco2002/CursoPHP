<?php
/* Los ciclos son una estructura de control que permite
repetir un conjunto de instrucciones sin necesidad de escribirlas 
muchas veces. 
*/ 
/*Ciclo while
Realizar un programa que imprima los numeros del 1 al 10 
$i = 1;

while ($i <= 10) {
    echo $i++. " ";

Realiza un programa que imprima las tablas de multiplicar
$i = 1;
$numero = 4;

while($i <= 10){
    echo $i++ * $numero . " ";
} */

/*Ciclo do while 

$i = 1;

do {
    echo $i . '<br>';
    $i++;
} while ($i <= 10);

echo "Fin de la instruccion";
*/

/*Ciclo for

 Realizar un programa que imprima los numeros del 1 al 10 

for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
}

echo "Fin de la instruccion"; 

Mostrar los numeros pares de 0 al 50
echo "NUMEROS PARES" . '<br>';
for ($i = 0; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        echo $i. ' ';
    }
}*/

/*Actividad ciclos  
    Calcule el factorial de los siguientes números: 5, 10, 15 y 20. El resultado debes colocarlo en un comentario multilíneas. 
*/

$numero = 20;
$factorial = 1; 

for ($x = 1; $x <= $numero; $x++) {
  
    $factorial = $factorial * $x;

}

echo "El factorial de ". $numero . " es " . $factorial . '<br>';


?>