<?php
require_once "Classes.php";
// Classe Vinho
class Vinho extends Bebida {
    private $nome;
    private $tipo;
    private $preco;

    public function __construct($nome, $tipo, $preco) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->preco = $preco;
    }

    public function mostrarBebida() {
        return "Vinho: $this->nome, Tipo: $this->tipo, Preço: R$ $this->preco";
    }

    public function verificarPreco($preco) {
        return $preco < 25 ? true : false;
    }
}
?>