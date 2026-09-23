<?php

// Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.
//Debe tener un método que no haga otra cosa que echar el dado.
//Crea también otro método que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.
//Después, amplía el programa para poder echar cinco dados de póquer a la vez.
//Además, queremos que la clase PokerDice tenga un método que nos permita ver la cantidad de tiradas de TODOS los dados.


// Crea la clase PokerDice. Las caras de un dado de póquer tienen
// las siguientes figuras: As, K, Q, J, 7 y 8.

class PokerDice
{
    private $figura;
    private static $totalTiradas = 0;

    // Método para tirar el dado
    public function echarElDado()
    {
        $figuras = array("As", "K", "Q", "J", 7, 8);

        $indice = array_rand($figuras);

        $this->figura = $figuras[$indice];

        self::$totalTiradas++;
    }

    // Método para saber la última figura obtenida
    public function ultimaFigura()
    {
        return $this->figura;
    }

    // Método para saber el total de tiradas de todos los dados
    public function lanzamientosTotales()
    {
        return self::$totalTiradas;
    }
}


// Crear cinco dados de póquer
$dado1 = new PokerDice();
$dado2 = new PokerDice();
$dado3 = new PokerDice();
$dado4 = new PokerDice();
$dado5 = new PokerDice();


// Tirar los cinco dados
$dado1->echarElDado();
$dado2->echarElDado();
$dado3->echarElDado();
$dado4->echarElDado();
$dado5->echarElDado();

// Mostrar la figura obtenida en cada dado
echo "Dado 1: " . $dado1->ultimaFigura() . PHP_EOL;
echo "Dado 2: " . $dado2->ultimaFigura() . PHP_EOL;
echo "Dado 3: " . $dado3->ultimaFigura() . PHP_EOL;
echo "Dado 4: " . $dado4->ultimaFigura() . PHP_EOL;
echo "Dado 5: " . $dado5->ultimaFigura() . PHP_EOL;

// Mostrar el total de lanzamientos
echo "Total de lanzamientos: " . $dado1->lanzamientosTotales() . PHP_EOL;

