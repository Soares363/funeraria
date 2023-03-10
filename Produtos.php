<?php 

class Cachorro extends Animal{

    public function __construct($nome, $raca, $idade, $cor) {
        parent::__construct($nome, $raca, $idade, $cor);
    }

    public function falar() {
        echo "Au au au <br>";
    }
}