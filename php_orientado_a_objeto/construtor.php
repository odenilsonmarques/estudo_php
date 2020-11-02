<?php

class Aluno{
    public string $nome;
    public string $matricula;

    public function __construct($nomeAluno){
        $this->nome = $nomeAluno;
    }

}

$aluno1 = new Aluno("odenilson");
$aluno1->matricula = "1234";

$aluno2 = new Aluno("bia");
$aluno2->matricula = "12345";


echo "o nome do aluno1 eh:".$aluno1->nome."<br>";
echo "a matricula do aluno1 eh:".$aluno1->matricula."<br><br>";

echo "o nome do aluno2 eh:".$aluno2->nome."<br>";
echo "a matricula do aluno2 eh:".$aluno2->matricula."<br>";