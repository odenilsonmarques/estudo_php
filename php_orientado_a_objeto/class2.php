<?php 

class Cartao{
    
    public $numero;
    public $dataDeValidade;

}

$cartao1 = new Cartao();
$cartao1->numero = 1234;
$cartao1->dataDeValidade = "02/06/2020";

echo "o numero do cartao1 eh: ".$cartao1->numero."<br><br>";
echo "a data de validade do cartao1 eh: ".$cartao1->dataDeValidade."<br>";
