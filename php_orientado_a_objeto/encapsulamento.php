<?php

class Aluno{
    private string $nome;
    private string $matricula;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function getMatricula(){
        return $this->matricula;
    }
}

$aluno1 = new Aluno();
$aluno1->setNome('odenilson');
$aluno1->setMatricula('SI1613006-21');

echo " O nome do aluno1 é ".$aluno1->getNome()."<br/><br/>";
echo " A matricual do aluno1 é ".$aluno1->getMatricula()."<br/><br/>";


