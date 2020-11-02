<?php

class Animal{
    private string $comida;
    private int $peso;

    public function getComida(){
        return $this->comida;
    }
    public function setComida($comida){
        $this->comida = $comida;
    }

    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function alteraPeso(){
        return $this->peso + 10;
    }

    public function fazerBarulho(){
        echo "grito cachoro e gato<br><br>";
    }
}

class Cachorro extends Animal{
    private string $nome;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    //sobreescrevendo(overrid) o metodo da classe principal, pois foi utilizado o mesmo metodo, porem com comportamento diferente
    public function alteraPeso(){
        return $this->getPeso() + 20; 
    }

    public function fazerBarulho(){
        echo "Au! Au!<br><br>";
    }
}

class Gato extends Animal{
    private string $nome;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    //sobreescrevendo(overrid)  o metodo da classe principal, pois foi utilizado o mesmo metodo, porem com comportamento diferente
    public function alteraPeso(){
        return $this->getPeso() + 30; 
    }

    public function fazerBarulho(){
        echo "Miau! Miau!<br><br>";
    }
}

$animal1 = new Animal();
$animal1->setComida('Racao');
$animal1->setPeso(10);
$animal1->fazerBarulho();

$cachorro = new Cachorro();
$cachorro->setComida('racao pedigre');
$cachorro->setPeso(2);
$cachorro->fazerBarulho();

$gato = new Gato();
$gato->setComida('sachê');
$gato->setPeso(1);
$gato->fazerBarulho();

echo  "-------------INFORMACOES DO ANIMAL EM GERAL------------<br><br>";
echo  "a comida dos animais é: ".$animal1->getComida()."<br>";
echo  "o peso dos animais é: ".$animal1->getPeso()."<br>";
echo  "o novo peso dos animais após alteracao é: ".$animal1->alteraPeso()."<br><br>";

echo  "-------------INFORMACOES DO CACHORRO------------<br><br>";
echo  "a comida do cachorro é: ".$cachorro->getComida()."<br>";
echo  "o peso do cachorro é: ".$cachorro->getPeso()."<br>";
echo  "o novo peso do cachorro após alteracao é: ".$cachorro->alteraPeso()."<br><br>";

echo  "-------------INFORMACOES DO GATO------------<br><br>";
echo  "a comida do gato é: ".$gato->getComida()."<br>";
echo  "o peso do cgato é: ".$gato->getPeso()."<br>";
echo  "o novo peso do gato após alteracao é: ".$gato->alteraPeso()."<br><br>";

