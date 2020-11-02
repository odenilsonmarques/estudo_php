<?php
class Funcionario{
    private string $nome;
    private float $salario;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }

    public function calculaBonificacao(){
        return $this->salario * 0.1;
    }

}

class Gerente extends Funcionario{
    private String $nomeUsuario;
    private string $senha;

    //dando um aumento de bonificação diferente para o gerente. Nesse caso, tou reaproveitando o mesmo metodo da classe Principal
    public function calculaBonificacao(){
       return $this->getSalario() * 0.6 + 100;
    }

    public function setNomeUsuario($nomeUsuario){
        $this->nomeUsuario = $nomeUsuario;
    }
    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getSenha(){
        return $this->senha;
    }

}

class Telefonista extends Funcionario{
    private int $estacaoDeTrabalho;

    public function setEstacaoDeTrabalho($estacaoDeTrabalho){
        $this->estacaoDeTrabalho = $estacaoDeTrabalho;
    } 
    public function getEstacaoDeTrabalho(){
        return $this->estacaoDeTrabalho;
    }
}

class Secretaria extends Funcionario{
    private int $ramal;

    public function setRamal($ramal){
        $this->ramal = $ramal;
    }
    public function getRamal(){
        return $this->ramal;
    }
}

$gerente = new Gerente();
$gerente->setNome('Odenilson');
$gerente->setSalario (50.000);
$gerente->setNomeUsuario('odUser');
$gerente->setSenha('ode2312');


$telefonista = new Telefonista();
$telefonista->setNome('Leide');
$telefonista->setSalario(2.000);
$telefonista->setEstacaoDeTrabalho(01);


$secretaria = new Secretaria();
$secretaria->setNome('Kiara');
$secretaria->setSalario(1.000);
$secretaria->setRamal(2);

echo"-------------------INFORMAÇÕES DO GERENTE------------<br/><br/>";
echo "o nome do gerente é: ".$gerente->getNome()."<br/>";
echo "o salario do gerente é: ".$gerente->getSalario()."<br/>";
echo "o nome de usuario do gerente é: ".$gerente->getNomeUsuario()."<br/>";
echo "a senha do gerente é: ".$gerente->getSenha()."<br/>";
echo "a bonificacao do gerente é: ".$gerente->calculaBonificacao()."<br/><br/>";


echo"-------------------INFORMAÇÕES DA TELEFONISTA------------<br/><br/>";
echo "o nome da telefonista é: ".$telefonista->getNome()."<br/>";
echo "o salario da telefonista é: ".$telefonista->getSalario()."<br/>";
echo "a estação de trabalho da telefonista é: ".$telefonista->getEstacaoDeTrabalho()."<br/>";
echo "a bonificacao da telefonista é: ".$telefonista->calculaBonificacao()."<br/><br/>";

echo"-------------------INFORMAÇÕES DA SECRETÁRIA------------<br/><br/>";
echo "o nome da secretaria é: ".$secretaria->getNome()."<br/>";
echo "o salario da secretaria é: ".$secretaria->getSalario()."<br/>";
echo "o ramal da secretaria é: ".$secretaria->getRamal()."<br/>";
echo "a bonificacao da secetaria é: ".$secretaria->calculaBonificacao()."<br/><br/>";

