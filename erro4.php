Erro:
echo $p->nome;
Motivo:

O atributo $nome é private, então não pode ser acessado diretamente fora da classe.

Código corrigido:
<?php

class Produto {

    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // Getter criado para acessar o nome
    public function getNome() {
        return $this->nome;
    }
}

$p = new Produto('Teclado', 150.00);

echo $p->getNome();

?>
