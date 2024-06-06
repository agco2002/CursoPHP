<?php
/*Los condicionales son utilizadas para tomar desiciones
en funcion de que se cumpla o no una determinada condicion  
*/

//Condicionales if y else
/*Realizar un programa que envie un mensaje solo si este 
contiene menos de 100 letras, caso contrario que arroje un mensaje 
de error


$total_letras = strlen ("Hola, estoy estiduando php");

if ($total_letras < 10) {
    echo "El mensaje tiene menos de 100 letras";
} else {
    echo "Error. Saturacion de letras en el mensaje por que contiene " . $total_letras . " letras";
}
*/
//Crear un programa que indique si los habitantes hablan español u otro idioma.

//$pais = 'Colombia';
//
//if ($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia' ) {
//    echo "Hablan español";
//} else {
//    echo "No hablan español";
//}

//Operador ternario 
/* Para que un alumno gane una asignatua debe sacar mas de 
3 en la nota definitiva, caso contrario pierde la asignatura 
*/
//$nota = 4;
//
//echo ($nota > 4 ? 'Ganste la asignatura ' : 'Perdiste la asignatura ');
//Operador 
//Realice un programa que imprima cual es tu color favorito
//$color_favorito = "verde";
//
//switch ($color_favorito) {
//    case 'rojo':
//        echo "Tu color favorito es rojo";
//        break;
//    case 'verde':
//        echo "Tu color favorito es verde";
//        break;
//    case 'azul':
//        echo "Tu color favorito es azul";
//        break;
//    
//    default:
//        echo "Tu color favorito no esta en la lista";
//        break;
//}



//if($color_favorito == "Verde"){
//    echo "Tu color favorito es verde";
//}else{
//    echo "Ese no es tu color favorito";
//}

//Actividad

/* escribas un programa que solicite el nombre del cliente y el valor de la compra. Y que arroje como resultado: 

Nombre del cliente

Valor de la compra sin descuento

Valor de la compra con descuento.*/

$nombre = "Eva Castro";
$compra = 350;

if ($compra < 50) {
    $descuento = 0.05; 
} else if($compra >= 50 && $compra < 100){
    $descuento = 0.10;
} else if($compra >= 100 && $compra <= 250){
 $descuento = 0.15;
} else if($compra > 250 && $compra < 400){
    $descuento = 0.20;
}else{
    echo "No aplica al descuento";
}

$valor_total = $descuento * $compra;  

echo $nombre . " su compra es de " . $compra . " usd" . " y con descuento es de ". $valor_total . " usd";


?>