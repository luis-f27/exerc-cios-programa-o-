Erro: instanciação sem new
Erro:
$c = Carro('Fusca');
Motivo:

Para criar objetos em PHP é obrigatório usar new.

Código corrigido:
<?php

class Carro {

    private $modelo;

    public function __construct($modelo) {
        $this->modelo = $modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }
}

// Correção com new
$c = new Carro('Fusca');

echo $c->getModelo();

?>
