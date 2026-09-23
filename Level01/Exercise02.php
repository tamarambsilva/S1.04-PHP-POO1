<?php


//Escribe un programa que defina una clase Shape con un constructor 
// que reciba como parámetros el ancho y alto. Define dos subclases; 
// Triángulo y Rectángulo que hereden de Shape y que calculen 
// respectivamente el área con un método.

class Shape {
    public $width;
    public $height;

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

class Rectangle extends Shape {
    public function area() {
        return $this->width * $this->height;
    }
}

$triangle = new Triangle(10, 5);
echo "Área del triángulo: " . $triangle->area() . PHP_EOL;

$rectangle = new Rectangle(10, 5);
echo "Área del rectángulo: " . $rectangle->area() . PHP_EOL;

