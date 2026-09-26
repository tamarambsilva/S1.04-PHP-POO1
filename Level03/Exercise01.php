<?php

//Imagina que necesitas presentar el catálogo de películas de una cadena de cines. Cada cine tiene un nombre, la ciudad donde se encuentra y una lista de películas. Cada película tiene un título, una duración y un director.

//La tarea consiste en crear un programa que permita registrar esta información para su uso posterior:

//Para cada cine, muestra los datos de cada película.

//En cada cine, muestra la película de mayor duración.

//Implementa una función o método que busque películas en diferentes cines por nombre del director. No es necesario repetir películas.

//Además, puedes usar este ejercicio para trabajar en una buena presentación con HTML+CSS que respalde la lógica.


class Cinema
{
    // Propiedades privadas del cine
    private $nombre;
    private $ciudad;
    private $peliculas;


    // CONSTRUCTOR
   
    public function __construct($nombre, $ciudad, $peliculas)
    {
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->peliculas = $peliculas;
    }


  
    // MOSTRAR PELÍCULAS


    // Este método recorre todas las películas
    // y muestra sus datos.
    

    public function mostrarPeliculas()
    {
        foreach ($this->peliculas as $pelicula) { // foreach es usado para percorrer todos elementos de um array

            echo "Título: " . $pelicula["titulo"] . PHP_EOL;
            echo "Duración: " . $pelicula["duracion"] . " minutos" . PHP_EOL;
            echo "Director: " . $pelicula["director"] . PHP_EOL;

            echo "------------------------" . PHP_EOL;
        }
    }


    // BUSCAR LA PELÍCULA MÁS LARGA


    // Este método busca la película que tiene la mayor duración.

    public function mayorDuracion()
    {
        // Empezamos con una duración de 0
        $mayorDuracion = 0;

        // Esta variable guardará la película más larga
        $peliculaMasLarga = null;


        // Recorremos todas las películas
        foreach ($this->peliculas as $pelicula) {

            // Comparamos la duración de la película actual
            // con la mayor duración encontrada hasta ahora.

    if ($pelicula["duracion"] > $mayorDuracion) {

        // Actualizamos la mayor duración
        $mayorDuracion = $pelicula["duracion"];

        // Guardamos toda la información de la película
        $peliculaMasLarga = $pelicula;
        }
    }


        // Mostramos el resultado
        echo "Película más larga: "
            . $peliculaMasLarga["titulo"]
            . PHP_EOL;

        echo "Duración: "
            . $peliculaMasLarga["duracion"]
            . " minutos"
            . PHP_EOL;
    }

    // GETTERS
    

    // Estos métodos permiten acceder a los datos privados
    // del cine desde fuera de la clase.

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function getPeliculas()
    {
        return $this->peliculas;
    }
}


// CREAR LOS CINES


// Creamos el primer cine con su nombre,
// ciudad y lista de películas.

$cinema1 = new Cinema(
    "Cinepolis",
    "Barcelona",
    [
        [
            "titulo" => "Inception",
            "duracion" => 148,
            "director" => "Christopher Nolan"
        ],

        [
            "titulo" => "Interstellar",
            "duracion" => 169,
            "director" => "Christopher Nolan"
        ],

        [
            "titulo" => "The Dark Knight",
            "duracion" => 152,
            "director" => "Christopher Nolan"
        ]
    ]
);

$cinema2 = new Cinema( 
    "Cinesa", 
    "Madrid",

[  [ "titulo" => "Inception", 
"duracion" => 148, 
"director" => "Christopher Nolan" ], 

[ "titulo" => "Dunkirk", 
"duracion" => 106, 
"director" => "Christopher Nolan" ], 

[ "titulo" => "Avatar", 
"duracion" => 162, 
"director" => "James Cameron" ] ] );


// MOSTRAR INFORMACIÓN DEL CINE


echo "============================" . PHP_EOL;
echo "CINE: " . $cinema1->getNombre() . PHP_EOL;
echo "CIUDAD: " . $cinema1->getCiudad() . PHP_EOL;
echo "============================" . PHP_EOL;

echo PHP_EOL;

echo "PELÍCULAS:" . PHP_EOL;

$cinema1->mostrarPeliculas();

echo PHP_EOL;

echo "PELÍCULA MÁS LARGA:" . PHP_EOL;

$cinema1->mayorDuracion();


echo "============================" . PHP_EOL;
echo "CINE: " . $cinema2->getNombre() . PHP_EOL;
echo "CIUDAD: " . $cinema2->getCiudad() . PHP_EOL;
echo "============================" . PHP_EOL;

echo PHP_EOL;

echo "PELÍCULAS:" . PHP_EOL;

$cinema2->mostrarPeliculas();

echo PHP_EOL;

echo "PELÍCULA MÁS LARGA:" . PHP_EOL;

$cinema1->mayorDuracion();



// buscar peliculas por diretor
// Esta función recibe:
// 1. Una lista de cines
// 2. El nombre del director que queremos buscar

function buscarPorDirector($cines, $director)
{
    // Array donde guardaremos las películas encontradas
    $peliculasEncontradas = [];

    // Recorremos todos los cines
    foreach ($cines as $cinema) {

        // Recorremos las películas de cada cine
        foreach ($cinema->getPeliculas() as $pelicula) {

            // Comprobamos si el director coincide
            if ($pelicula["director"] == $director) {

                // Evitamos películas repetidas
                if (!in_array($pelicula["titulo"], $peliculasEncontradas)) {

                    $peliculasEncontradas[] = $pelicula["titulo"];

                    echo "Título: " . $pelicula["titulo"] . PHP_EOL;
                    echo "Duración: " . $pelicula["duracion"] . " minutos" . PHP_EOL;
                    echo "Director: " . $pelicula["director"] . PHP_EOL;
                    echo "------------------------" . PHP_EOL;
                }
            }
        }
    }
}


// EJECUTAR LA BÚSQUEDA


echo PHP_EOL;
echo "============================" . PHP_EOL;
echo "PELÍCULAS DE CHRISTOPHER NOLAN" . PHP_EOL;
echo "============================" . PHP_EOL;

$cines = [$cinema1, $cinema2];

buscarPorDirector($cines, "Christopher Nolan");
