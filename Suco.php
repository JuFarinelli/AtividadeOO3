<?php
require_once "Classes.php";
// Classe Suco
class Suco extends Bebida {
    private $sabor;
    private $preco;

    public function __construct($sabor, $preco) {
        $this->sabor = $sabor;
        $this->preco = $preco;
    }

    public function mostrarBebida() {
        return "Suco: Sabor $this->sabor, Preço: R$ $this->preco";
    }

    public function verificarPreco($preco) {
        return $preco < 2.5 ? true : false;
    }
}
?>