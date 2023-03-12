<?php
class Persona {
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $edad;
  
    public function __construct($nombre, $apellido1, $apellido2, $edad) {
      $this->nombre = $nombre;
      $this->apellido1 = $apellido1;
      $this->apellido2 = $apellido2;
      $this->edad = $edad;
    }
  
    public function getNombre() {
      return $this->nombre;
    }
  
    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }
  
    public function getApellido1() {
      return $this->apellido1;
    }
  
    public function setApellido1($apellido1) {
      $this->apellido1 = $apellido1;
    }
  
    public function getApellido2() {
      return $this->apellido2;
    }
  
    public function setApellido2($apellido2) {
      $this->apellido2 = $apellido2;
    }
  
    public function getEdad() {
      return $this->edad;
    }
  
    public function setEdad($edad) {
      $this->edad = $edad;
    }
  
    public function imprimir() {
      echo "Nombre: " . $this->nombre . "<br>";
      echo "Apellido 1: " . $this->apellido1 . "<br>";
      echo "Apellido 2: " . $this->apellido2 . "<br>";
      echo "Edad: " . $this->edad . "<br>";
    }
  }
  
$persona1 = new Persona("Juan", "Pérez", "García", 30);
$persona1->imprimir();

echo "<br>";

$persona2 = new Persona("María", "González", "López", 25);
$persona2->setEdad(26);
$persona2->imprimir();

?>