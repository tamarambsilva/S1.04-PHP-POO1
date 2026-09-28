
<?php


//Crie uma classe que represente um funcionário, com atributos referentes ao seu nome e salário. 
// Defina um método que receba o nome e o salário como parâmetros. Crie um segundo método 
// que imprima o nome e uma mensagem indicando se o funcionário deve ou não pagar impostos 
// (se o salário for superior a 6000, ele deve pagar impostos).


class Employee {
    private string $name; 
    private float $salary;

    public function __construct(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function checkTaxes(): void //void porque nao retorna nenhum valor
    {
        if ($this->salary > 6000) {
            echo "The employee {$this->name} have to pay taxes";
        } else {
            echo "El empleado {$this->nome} Don't have to pay taxes";
        }
    }
}

$employee = new Employee("Juan", 7000);
$employee->checkTaxes();



