<?php
require_once "Classes.php";
// Classe Refrigerante
class Refrigerante extends Bebida {
   
    private $retornavel;
  

    public function __construct($retornavel) {
        $this->retornavel = $retornavel;
    }

    public function mostrarBebida() {
        return "Refrigerante: $this->retornavel";
    }

    public function verificarPreco($preco) {
        return $preco < 5 ? true : false;
    }
}
?>