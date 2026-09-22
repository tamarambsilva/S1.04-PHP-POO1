
<?php


//Crie uma classe que represente um funcionário, com atributos referentes ao seu nome e salário. 
// Defina um método que receba o nome e o salário como parâmetros. Crie um segundo método 
// que imprima o nome e uma mensagem indicando se o funcionário deve ou não pagar impostos 
// (se o salário for superior a 6000, ele deve pagar impostos).


class Empleado {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function verificarImposto() {
        if ($this->salario > 6000) {
            echo "El empleado {$this->nome} debe pagar impuestos.";
        } else {
            echo "El empleado {$this->nome} no debe pagar impuestos.";
        }
    }
}

$empleado = new Empleado("Juan", 7000);
$empleado->verificarImposto();



