<?php
class Calculadora{
    private float $numero = 0;

    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function getNumero(){
        return $this->numero;
    }

    public function add($valor){
        $this->numero += $valor;
    }

    public function sub($valor){
        $this->numero -= $valor;
    }

    public function multiplica($valor){
        $this->numero *= $valor;
    }

    public function divide($valor){
        $this->numero /= $valor;
    }

}

