<?php
//criando a funcao. passando valores no parametro, porem quando é declarado um parametro com valor igual a zero,  a passagem de parametro é opcional
function somaValoresOpcional($n1,$n2,$n3=0){
    $somaValores = $n1+$n2+$n3;
    return $somaValores;
}
//Executando a funcao, como o terceiro valor está com valor igual a zero, é opcional a passagem de valor
$total = somaValoresOpcional(1,2);
echo "valor da 1 funcao :".$total."<br/>";



//criando funcao com tipo de dados declarados
function somaValores(int $m1, int $m2){
    $somaValores2 = $m1 + $m2;
    return $somaValores;
}
//executando a funcao
$total2 = somaValoresOpcional(2,4);
echo  "valor da 2 funcao :".$total2;

