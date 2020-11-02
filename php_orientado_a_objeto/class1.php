<?php

class Cliente{

    public $nome;
    public $codigo;
}

$cliente1 = new Cliente();
$cliente1->nome = "odenilson"; 
$cliente1->codigo = 123;

$cliente2 = new Cliente();
$cliente2->nome = "bia";
$cliente2->codigo = 1234;

//cliente1
echo "o nome do cliente1 eh: ".$cliente1->nome."<br>";
echo "o codigo do cliente1 eh:".$cliente1->codigo."<br><br><br>";

//cliente2
echo "o nome do cliente2 eh: ".$cliente2->nome."<br>";
echo "o codigo do cliente2 eh:".$cliente2->codigo."<br>";


