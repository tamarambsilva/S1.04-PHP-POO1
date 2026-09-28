
<?php


//Crie uma classe que represente um funcionário, com atributos referentes ao seu nome e salário. 
// Defina um método que receba o nome e o salário como parâmetros. Crie um segundo método 
// que imprima o nome e uma mensagem indicando se o funcionário deve ou não pagar impostos 
// (se o salário for superior a 6000, ele deve pagar impostos).


class Employee { // classe, é o molde
    private string $name; // atributo que guarda o nome
    private float $salary; // atributo que guarda o salario

    public function __construct(string $name, float $salary) {
        
        // ATRIBUIÇÃO
        // Pegamos o parâmetro $name e colocamos
        // dentro do atributo $this->name.
        $this->name = $name; //metodo
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



