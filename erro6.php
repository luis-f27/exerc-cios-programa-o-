Erro: setter não bloqueia valor inválido
Problema:

Mesmo com a mensagem de erro, o valor negativo ainda é salvo.

Código corrigido:
<?php

class Pessoa {

    private $idade;

    public function setIdade($idade) {

        if ($idade < 0) {
            echo 'Idade invalida!';
            return; // impede a atribuição
        }

        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }
}

$p = new Pessoa();

$p->setIdade(-5);

echo $p->getIdade();

?>
