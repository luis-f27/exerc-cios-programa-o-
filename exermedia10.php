<?php

class Aluno {

    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome, $nota1, $nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function calcularMedia(){
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function situacao(){

        if($this->calcularMedia() >= 5){
            echo "Aprovado";
        } else {
            echo "Reprovado";
        }
    }
}

$a = new Aluno("Pedro", 7, 8);

echo "Média: " . $a->calcularMedia() . "<br>";

$a->situacao();

?>