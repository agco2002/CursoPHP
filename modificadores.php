<?php
/*Existen tres tipos de modificadores:
    -Public: Se puede acceder desde objeto o clase
    -Private: Solo se puede acceder desde la misma clase
    -Protected: Solo se puede acceder desde la misma clase y clases hijas
    //Accedo desde el objeto
      echo $jugador1->nombre;
    */
class SeleccionFutbol{
    public $id;
    private $nombre;
    public $edad;
    //constructor
    public function __construct($id, $nombre, $edad){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
//Acceso desde la clase
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
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

//Accedo desde el objeto
echo $jugador1->nombre;

//Acceso desde la clase
//echo $jugador1->getNombre(); //Cristiano
//echo $jugador1 ->setNombre("Leonel Messi");//Actualizar 
echo $jugador1 ->getNombre();

?>