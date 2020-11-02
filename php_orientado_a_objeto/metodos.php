<?php

class Conta{

    public int $numero;
    public float $saldo;
    public float $limite = 100;

    public function depositar($valor){
        $this->saldo += $valor;
    }

    public function sacar($valor){
        $this->saldo -= $valor;
    }

    public function aumetaLimite($valor){
        $this->limite += $valor;
    }
}

$ct = new Conta();
$ct->numero = 122;
$ct->saldo = 10;

$ct->aumetaLimite(100);
echo "o numero da conta eh:".$ct->numero."<br>";
$ct->depositar(20);
echo "o saldo da conta apos o deposito eh:".$ct->saldo."<br>";
$ct->sacar(15);
echo "o saldo da conta apos o saque eh:".$ct->saldo."<br>";
echo "o limite da conta eh:".$ct->limite."<br>";

