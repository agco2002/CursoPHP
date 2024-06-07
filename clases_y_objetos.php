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

/*EL CONSTRUCTOR
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
*/

//HERENCIA
/*La herencia es la capacidad de reutilizar una clase extendiendo su funcionalidad */
//clase padre
class SeleccionFutbol{
    public $id;
    public $nombre;
    public $edad;
    //constructor
    public function __construct($id, $nombre, $edad){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    //Metodos
    public function concentrarse (){
        echo $this->nombre . " esta en concentración ";
    }
    public function viajar() {
        echo $this->nombre . " está viajando ";
    }
}

//Clase hija
class Jugador extends SeleccionFutbol{
    //Propiedades de una clase
    public $posicion;
    public $numero;

    //Constructor 
    public function __construct($id, $nombre, $edad, $posicion, $numero){

       parent::__construct($id, $nombre, $edad,);
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

//Clase hija 

class Entrenador extends SeleccionFutbol{
    public $experiencia;

    public function __construct($id, $nombre, $edad, $experiencia){
        parent::__construct($id, $nombre, $edad);
        $this->experiencia = $experiencia;
    }

    public function dirigirEntrenamiento(){
        echo $this->nombre . " esta dirigiendo el entrenamiento";
    }
    public function dirigirPartido(){
        echo $this->nombre . " esta dirigiendo el juego";
    }
}

//Instancias de una clase
$jugador1 = new Jugador(123, "Cristiano", 37, "Delantero", 7);
$entrenador1 = new Entrenador(345, "Zidane", 56, 10);
echo $entrenador1->dirigirPartido();
echo '<br>';
echo $jugador1->concentrarse();


/* Para heredar de la clase padre los atributos y métodos debemos colocar en la clase hija la palabra reservada "extends" y seguidamente colocamos el nombre de la clase padre que este caso es "seleccionFutbol"
-La palabra parent:: se utiliza para acceder a métodos y propiedades de la clase padre desde una clase hija
*/

?>