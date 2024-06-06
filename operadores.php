<?php
/*Existen diferentes tipos de operadores:
    * Operadores Lógicos
    *Operadores aritméticos
    *Operadores de asignación
    *Operadores de comparación
    */
 //OPERADORES ARITMÉTICOS

    //Definir variable número

    $numero1 = 20;
    $numero2 = 6;

    //Suma
    echo $numero1 + $numero2;
    echo "<br>";

    //Resta
    echo $numero1 - $numero2;
    echo "<br>";

    //Multiplicación
    echo $numero1 * $numero2;
    echo "<br>";

    //División
    echo $numero1 / $numero2;
    echo "<br>";

    //Módulo
    echo $numero1 % $numero2;
    echo "<br>";

    //Incremento
    $numero1++;
    echo $numero1;
    echo "<br>";

    //Decremento
    $numero1--;
    echo $numero1;
    echo "<br>";

    //Potencia
    echo pow($numero1, $numero2);
    echo "<br>";

    //Raíz cuadrada
    echo sqrt($numero1);
    echo "<br>";

    //Valor absoluto
    echo abs($numero1);
    echo "<br>";

    //Redondeo
    echo round($numero1);
    echo "<br>";



 
    
//OPERADORES LÓGICOS

 $a and $b;
 $a && $b;
 $a or $b;
 $a || $b;
 $a xor $b;
 !$a;

 //Variables con valores Booleanos
 $x = true;
 $y = false;

 //Operador AND

 echo $x and $y;
 echo "<br>";
 echo $x && $y;
echo "<br>";
 //Operador OR
 echo $x or $y;
echo "<br>";
echo $x || $y;
echo "<br>";

//Operador XOR
 echo $x xor $y;
echo "<br>";

//Negacion 
echo !$y;

//OPERADORES DE COMPARACIÓN

/*$a == $b;  //Igual
$a === $b;//Identico
$a!= $b;//Diferente
$a <> $b;//Diferente
$a!== $b;//No idéntico
$a > $b;//Mayor que 
$a < $b;//Menor que 
$a >= $b;//Mayor o igual que
$a <= $b;//Menor o igual que*/ 

//Comparaciones 

$a = 10;
$b = 20;

$a == $b;
echo "<br>";
$a === $b;
echo "<br>";
$a!= $b;
echo "<br>";
$a <> $b;
echo "<br>";
$a!== $b;
echo "<br>";
$a > $b;
echo "<br>";
$a < $b;
echo "<br>";
$a >= $b;
echo "<br>";
$a <= $b;

//OPERADORES DE ASIGNACIÓN





?>