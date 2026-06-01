<?php

class Estoque {

    private $produtos = [];

    public function adicionarProduto($nome, $quantidade){

        $this->produtos[] = [
            'nome' => $nome,
            'qtd' => $quantidade
        ];
    }

    public function listarProdutos(){

        foreach($this->produtos as $p){

            echo $p['nome'] . " - Quantidade: " . $p['qtd'] . "<br>";
        }
    }

    public function totalItens(){

        $total = 0;

        foreach($this->produtos as $p){
            $total += $p['qtd'];
        }

        return $total;
    }
}

$e = new Estoque();

$e->adicionarProduto("Mouse", 10);
$e->adicionarProduto("Teclado", 5);
$e->adicionarProduto("Monitor", 2);

$e->listarProdutos();

echo "Total de itens: " . $e->totalItens();

?>
