<?php
/* Las funciones son bloques de codigos que realizan una tarea especifica y son muy usadas en la programacion por que permiten reutilizar el codigo */

/*function saludo(){

    echo "Hola, soy una funcion";

}

saludo();
saludo();*/

/*function suma(){
    $num1 = 10;
    $num2 = 20;
    $suma = $num1 + $num2;
    echo "El resultado de la suma es de: " . $suma;
}

suma();*/

/* Funcion con parametro
Parametros: Son datos que se utilizan para realizar operaciones dentro de la funcion
- Cuando enviamos el valor saludo se le llama argumento
y cunado lo recibimos dentro de la funcion lo llamamos parametros 

function saludo($nombre){
    echo "Hola " . $nombre . ", eres un gran programador";
}   
   
$nombre = "Andres Calderon";
saludo($nombre)
*/
/*
function operaciones($numero1, $numero2, $operacion) {
    if (!is_numeric($numero1) || !is_numeric($numero2)) {
        throw new Exception("Los valores deben ser números.");
    }

    if ($operacion == "suma") {
        $resultado = $numero1 + $numero2;
    } else if ($operacion == "resta") {
        $resultado = $numero1 - $numero2;
    } else if ($operacion == "multiplicacion") {
        $resultado = $numero1 * $numero2;
    } else if ($operacion == "division") {
        if ($numero2 == 0) {
            throw new Exception("No se puede dividir por cero.");
        }
        $resultado = $numero1 / $numero2;
    } else {
        throw new Exception("Operacion no valida: $operacion");
    }

    return $resultado;
}

try {
    $imprimir = operaciones(5, 5, "multiplicacion");
    echo $imprimir;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}*/

/*
function check_vote($nombre, $edad){
    if($edad >= 18){
        echo $nombre . ", puedes votar";
    }else{
        echo $nombre . ", No puedes votar";
    }
}
check_vote("Jorge", 22); */

/*Formas de declaras arreglo */

//$arreglo1 = array("Elemento1", 2, "Elemento3", 25, 5.6);

//$arreglo2 = ["Elemento1", 20, "Elemento3", "Elemento4", true, false];

//clave => valor
$arreglo3 = array(
    'nombre' => 'Gianluigi',
    'edad' => 20,
    'celular' => 1724356,
    'estatura' => 1.70,
);

echo '</pre>';
var_dump($arreglo3);
echo '</pre>';

//Eliminar el ultimo elemento del arreglo
array_pop($arreglo3);

echo '</pre>';
var_dump($arreglo3);
echo '</pre>';

?>