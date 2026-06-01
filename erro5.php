Erro:
echo 'Aluno: ' . $nome . ' - Nota: ' . $nota;
Motivo:

Dentro da classe, atributos devem ser acessados usando $this->.

Código corrigido:
<?php

class Aluno {

    private $nome;
    private $nota;

    public function __construct($nome, $nota) {
        $this->nome = $nome;
        $this->nota = $nota;
    }

    public function exibir() {

        // Correção usando $this
        echo 'Aluno: ' . $this->nome . ' - Nota: ' . $this->nota;
    }
}

$a = new Aluno('Carlos', 8.5);

$a->exibir();

?>
