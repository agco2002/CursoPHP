<?php
class Persona{
    public string $nombre;
    public int $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimirDatos(){
        echo "Nombre: ". $this->nombre. "<br>";
        echo '<br>';
        echo "Edad: ". $this->edad. "<br>";
    }
    
}

//clase hija
class Ciudadano extends Persona{

    public int $deposito;

    public function __construct($nombre, $edad, $deposito){
        parent::__construct($nombre, $edad);
        $this->deposito = $deposito;
    }

    public function imprimirDatos(){
        parent::imprimirDatos();
        echo "Deposito: ". $this->deposito. "<br>";
    }

    public function impuestos(){
        if($this->deposito > 3000){
            echo "El ciudadano " . $this->nombre . " debe pagar impuestos";
        }else{
            echo "El ciudadano" . $this->nombre . "no debe pagar impuestos";
        }
    }
}

$ciudadano = new Ciudadano("Mariano", 25, 5700);
$ciudadano->imprimirDatos();
$ciudadano->impuestos();
echo "<br>";
echo "<br>";
$ciudadano = new Ciudadano("Leonel", 56, 3500);
$ciudadano->imprimirDatos();
$ciudadano->impuestos();
echo "<br>";
echo "<br>";
$ciudadano = new Ciudadano("Yaneth", 34, 8400);
$ciudadano->imprimirDatos();
$ciudadano->impuestos();
echo "<br>";
echo "<br>";
$ciudadano = new Ciudadano("Martin", 45, 2500);
$ciudadano->imprimirDatos();
$ciudadano->impuestos();

    



?>