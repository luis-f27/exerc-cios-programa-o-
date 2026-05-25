<?php

class Contato {

    private $nome;
    private $telefone;

    public function __construct($nome, $telefone){
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }
}

class Agenda {

    private $contatos = [];

    public function adicionarContato($nome, $telefone){

        $c = new Contato($nome, $telefone);

        $this->contatos[] = $c;
    }

    public function listar(){

        foreach($this->contatos as $c){

            echo "Nome: " . $c->getNome() . "<br>";
            echo "Telefone: " . $c->getTelefone() . "<br><br>";
        }
    }
}

$a = new Agenda();

$a->adicionarContato("Carlos", "99999-1111");
$a->adicionarContato("Ana", "99999-2222");
$a->adicionarContato("Pedro", "99999-3333");

$a->listar();

?>