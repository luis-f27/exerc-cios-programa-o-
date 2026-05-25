<?php

class Funcionario {

    private $nome;
    private $cargo;
    private $salario;

    public function __construct($nome, $cargo, $salario){
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual){
        $this->salario = $this->salario * (1 + $percentual / 100);
    }

    public function exibir(){

        echo "Nome: " . $this->nome . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br><br>";
    }
}

$f = new Funcionario("Ana", "Desenvolvedora", 3000);

echo "Antes do aumento:<br>";
$f->exibir();

$f->aumentarSalario(15);

echo "Depois do aumento:<br>";
$f->exibir();

?>