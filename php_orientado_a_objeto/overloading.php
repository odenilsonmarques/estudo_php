<?php
class Gerente{

    public string $nome;
    public float $salario;

    //overloading, são método com mesmo nome, porem assinatiras direferentes(comportamento)

    //obs:retornar 

    public function aumentaSalario(){
        $this->aumentaSalario(0.1);
    }

    /*
    public function aumentaSalario($taxa){
        $this->salario += $this->salario * $taxa;
    }*/

}