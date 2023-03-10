<?php 

class Tartaruga extends Animal{

    public function __construct($nome, $raca, $idade, $cor) {
        parent::__construct($nome, $raca, $idade, $cor);
    }

    public function falar() {
        echo "AAAAAAAAAAAAAAAAAa";
    }
}