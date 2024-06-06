<?php
/*class Jugador {
    public $nombre;
    public $posicion;
    public $numero;
}
//Instancias de una clase
$jugador1 = new Jugador();
$jugador1->nombre = "Messi";
$jugador1->posicion = "Delantero";
$jugador1 ->numero = 10;


echo '<pre>';
var_dump($jugador1);
echo '</pre>';

//Objeto jugador2
$jugador2 = new Jugador();
$jugador2->nombre = "Ronaldo";
$jugador2->posicion = "Delantero";
$jugador2 ->numero = 7;


echo '<pre>';
var_dump($jugador2);
echo '</pre>';
*/

/* METODOS DE UNA CLASE 
//clase
class Jugador {
    //Propiedades de una clase
    public $nombre;
    public $posicion;
    public $numero;

    //Metodos de una clase
    public function entrenar(){
        echo $this->nombre . " esta entrenando ";
    }
    public function jugar(){
        echo $this->nombre . " esta jugando ";
    }

}
//Instancias de una clase
$jugador1 = new Jugador();
$jugador1->nombre = "Messi";
$jugador1->posicion = "Delantero";
$jugador1 ->numero = 10;
$jugador1 -> entrenar();
echo '<br>';
$jugador1 -> jugar();



echo '<pre>';
var_dump($jugador1);
echo '</pre>';

//Objeto jugador2
$jugador2 = new Jugador();
$jugador2->nombre = "Ronaldo";
$jugador2->posicion = "Delantero";
$jugador2 ->numero = 7;
$jugador2 -> entrenar();
echo '<br>';
$jugador2 -> jugar();




echo '<pre>';
var_dump($jugador2);
echo '</pre>';
*/

/*EL CONSTRUCTOR*/
//clase
class Jugador {
    //Propiedades de una clase
    public $nombre;
    public $posicion;
    public $numero;

    //Constructor 
    public function __construct($nombre, $posicion, $numero){
        $this->nombre = $nombre;
        $this->posicion = $posicion;
        $this->numero = $numero;
    }

    //Metodos de una clase
    public function entrenar(){
        echo $this->nombre . " esta entrenando ";
    }
    public function jugar(){
        echo $this->nombre . " esta jugando ";
    }

}
//Instancias de una clase
$jugador1 = new Jugador("Messi", "Delantero", 10 );
echo '<pre>';
var_dump($jugador1);
echo '</pre>';

//Objeto jugador2
$jugador2 = new Jugador("Ronaldo", "Delantero", 7 );

echo '<pre>';
var_dump($jugador2);
echo '</pre>';

?>