<?php
require_once "Shape.php";
class Triangulo extends Shape {
    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    } 
    public function calcularArea() {
        return ($this->alto * $this->ancho) / 2;
    }
}
?>