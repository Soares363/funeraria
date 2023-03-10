<?php 

class Funcionario extends Pessoas{

    private $registro;
    private $cargo;


    public function __construct($nome, $cpf, $idade, $registro, $cargo) {
        parent::__construct($nome, $cpf, $idade);

        $this->registro = $registro;
        $this->cargo = $cargo;
    }

    public function getregistro() {
        return $this->registro;
    }
    
    public function getcargo() {
        return $this->cargo;
    }

    

}

