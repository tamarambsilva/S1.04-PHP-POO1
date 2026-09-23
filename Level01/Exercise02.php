<?php


//Escribe un programa que defina una clase Shape con un constructor 
// que reciba como parámetros el ancho y alto. Define dos subclases; 
// Triángulo y Rectángulo que hereden de Shape y que calculen 
// respectivamente el área con un método.


// Declaración de la clase base Shape
// (pt) Shape é apenas uma classe base que representa uma forma geométrica com largura e altura.

class Shape {
    public $width;  // (pt) public porque pode ser acessada diretamente pelas subclasses
    public $height;

    // Constructor
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}   

class Triangle extends Shape {
    public function area() {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle extends Shape { // (pt) Rectangle é uma subclasse de Shape que representa um retângulo.
    public function area() {
        return $this->width * $this->height;
    }
}

$triangle = new Triangle(10, 5); // (pt) Criando uma instância da classe Triangle com largura 10 e altura 5
echo "Área del triángulo: " . $triangle->area() . PHP_EOL;

$rectangle = new Rectangle(10, 5);
echo "Área del rectángulo: " . $rectangle->area() . PHP_EOL;

